<?php
session_start();
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: login.php");
//     exit;
// }
include("connection.php");

$email = "";
$password = "";

if (isset($_POST["login"])){

    //LOGIN

    if(isset($_POST["email"]) && $_POST["email"]!="" && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $email = $_POST["email"];

    }else if(isset($_POST["email"]) && $_POST["email"]!="" && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        die("Incorrect email format.");
    }else{
        die("Nice try Dr. :D 3");
    }

    if(isset($_POST["password"]) && $_POST["password"]!="" && preg_match('@[A-Z]@', $_POST["password"]) && preg_match('@[a-z]@',  $_POST["password"]) && preg_match('@[0-9]@',  $_POST["password"]) && preg_match('@[^\w]@',  $_POST["password"]) && strlen($_POST["password"]) > 7 && strlen($_POST["password"]) < 21){
        $password = hash("sha256",$_POST["password"]);

    }else if(isset($_POST["password"]) && $_POST["password"]!="" && !preg_match('@[A-Z]@', $_POST["password"]) || !preg_match('@[a-z]@',  $_POST["password"]) || !preg_match('@[0-9]@',  $_POST["password"]) || !preg_match('@[^\w]@',  $_POST["password"]) || strlen($_POST["password"]) < 8 || strlen($_POST["password"]) > 20){
        die("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
    }else{
        die("Nice try Dr. :D 4");
    }

    $mysql = $connection->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $mysql->bind_param("ss", $email, $password);
    $mysql->execute();
    $results = $mysql->get_result();
    $row = $results->fetch_assoc();

    if(empty($row)) {
        header('Location: login.html');
    }else {  
        $_SESSION["loggedin"] = true;
        $_SESSION["user_id"] = $row['user_id'];
        $_SESSION["type"] = $row['type'];
        if(strcmp($row['type'],"1")==0){
            header('Location: admin_page.php');
        }
        elseif (strcmp($row['type'],"2")==0) {
            header('Location: profile_tutor.php');
        }
        else{
            header('Location: profile.php');
        }
    }
}




else if (isset($_POST["forgot"])) {

    //FORGOT PASSWORD

    if(isset($_POST["email"]) && $_POST["email"]!="" && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $email = $_POST["email"];

    }else if(isset($_POST["email"]) && $_POST["email"]!="" && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        die("Incorrect email format.");
    }else{
        die("Nice try Dr. :D 3");
    }

    $mysql = $connection->prepare("SELECT * FROM users WHERE email = ?");
    $mysql->bind_param("s", $email);
    $mysql->execute();
    $results = $mysql->get_result();
    $row = $results->fetch_assoc();

    if(empty($row)) {
        die("wrong email");

    }else {
        $code = sprintf("%06d", mt_rand(1, 999999));

        $now = microtime(true);
        $now = substr($now, 0, strpos($now, "."));

        $query = "DELETE FROM temp_codes WHERE user_id = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("d", $row["user_id"]);
        if (!$stmt->execute()) {
            die ("Failed");
        }

        $query = "INSERT INTO temp_codes (user_id, code, created) VALUES (?,?,?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("dss", $row["user_id"], $code, $now);
        if (!$stmt->execute()) {
            die ("Failed");
        }

        $_SESSION["code"] = $code;
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["email"] = $email;

        $connection->close();

        $message = "
        Hello " . $row["first_name"] . "!\n\n
        Your Teachers password reset code is:\n\n" .
        $code .
        "\n\n
        Please use this code within 10 minutes of receiving this email.\n
        Please do not share this code with anyone.\n
        If you did not request to change your password, you can safely ignore this email.\n\n
        With love,\n
        Teachers
        ";

        $subject = "Teachers - Your password reset code";
        header('Location: verification.html');

    }

}
?>
