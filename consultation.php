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



$to_email = "yara.chahine@lau.edu";
$subject = "Teachers Consultation Request";
$body = "Hello Admin! A new consultation request from $firstname $lastname is waiting for you.";
$headers = "From: yarachahine77@gmail.com";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

//header("Location: success.html");




?>