<?php

$first_name = $_POST["first_name"];
$last_name =  $_POST["last_name"];
$phone_number = $_POST["phone_number"];
$email_address = $_POST["email_address"];
$password = hash("sha256", $_POST["password"]);

$education = $_POST["education"];
$course = $_POST["course"];

$tutor = $_POST["tutor"];
$date = $_POST["date"];
$monday = $_POST["monday"];
$tuesday = $_POST["tuesday"];
$wednesday = $_POST["wednesday"];
$thursday = $_POST["thursday"];
$friday = $_POST["friday"];
$saturday = $_POST["saturday"];
$sunday = $_POST["sunday"];
$price = $_POST["price"];
print_r($_POST);
?>