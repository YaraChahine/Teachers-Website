<?php 


include("connection.php");



$firstname = $_POST["first"];
$lastname = $_POST["last"];
$email = $_POST["email"];
$phone= $_POST["phone"];
$information= $_POST["information"];


//We should check if tutor already in database;
$query= "INSERT into consultations(first_name,last_name,email_address,phone_number,information) values (?,?,?,?,?);";
$stmt = $connection->prepare($query);
$stmt->bind_param("sssss", $firstname, $lastname, $email,$phone,$information);
$stmt->execute();

$to_email = 'yarachahine77@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: yara.ch@yahoo.com';
mail($to_email,$subject,$message,$headers);

header("Location: success.html");




?>