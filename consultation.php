<?php 


include("connection.php");



$firstname = $_POST["first"];
$lastname = $_POST["last"];
$email = $_POST["email"];
$phone= $_POST["phone"];
$information= $_POST["information"];


//We should check if tutor already in database;
$query= "INSERT into consultation(first_name,last_name,email,phone_number,information) values (?,?,?,?,?);";
$stmt = $connection->prepare($query);
$stmt->bind_param("sssss", $firstname, $lastname, $email,$phone,$information);
$stmt->execute();

header("Location: success.html");




?>