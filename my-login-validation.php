<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.html");
    exit;
}
include("connection.php");

$email = "";
$password = "";



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
    $_SESSION["user_type"] = $row['user_type'];

    header('Location: index.html');
   }
?>
