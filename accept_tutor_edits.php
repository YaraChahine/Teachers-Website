<?php

include("connection.php");
$id = $_GET["id"];


$gender = $_POST["gender"];
$years_of_experience = $_POST["years_of_experience"];
$major = $_POST["major"];
$year_born= $_POST["year_born"];
$college_name= $_POST["college_name"];
$cv = $_POST["cv"];

//Will fix later
$query_add = "INSERT INTO tutors(gender, years_of_experience, major, year_born, city, college_name, cv, profile_image,description) VALUES (?,?,?,?,?)";
$stmt = $connection->prepare($query_add);
$stmt->bind_param("ddssssdsssss", $email,$years_of_experience,$major, $year_born,$city,$college_name, $phone_number, $profile_image,$description);
$stmt->execute();

// REPLACE INTO tutors (email, phone_number, city, profile_image, description  )


$query = "DELETE FROM tutor_edit_requests where id = $id";
$stmt = $connection->prepare($query);
$stmt->execute();


header("Location: admin_updates.php");
?>