<?php

include("connection.php");

session_start();

if(isset($_POST["password"]) && $_POST["password"]!="" && preg_match('@[A-Z]@', $_POST["password"]) && preg_match('@[a-z]@',  $_POST["password"]) && preg_match('@[0-9]@',  $_POST["password"]) && preg_match('@[^\w]@',  $_POST["password"]) && strlen($_POST["password"]) > 7 && strlen($_POST["password"]) < 21){
    $password = hash("sha256",$_POST["password"]);
}else if(isset($_POST["password"]) && $_POST["password"]!="" && !preg_match('@[A-Z]@', $_POST["password"]) || !preg_match('@[a-z]@',  $_POST["password"]) || !preg_match('@[0-9]@',  $_POST["password"]) || !preg_match('@[^\w]@',  $_POST["password"]) || strlen($_POST["password"]) < 8 || strlen($_POST["password"]) > 20){
    die("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
}else{
    die("Invalid pass");
}

$user_id = $_SESSION["user_id"];

$query = "UPDATE users SET password = ? WHERE user_id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("sd", $password, $user_id);
if (!$stmt->execute()) {
    die("Failed");
}
$stmt->close();

$query = "DELETE FROM temp_codes WHERE user_id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("d", $user_id);
if (!$stmt->execute()) {
    die("Failed");
}

$query = "ALTER TABLE temp_codes AUTO_INCREMENT = 1";
$stmt = $connection->prepare($query);
if (!$stmt->execute()) {
    die("Failed");
}
$stmt->close();

$connection->close();

session_unset();
session_destroy();

header('Location: change_success.html');

?>