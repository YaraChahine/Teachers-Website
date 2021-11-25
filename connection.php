<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "teachersdatabase";

$connection = new mysqli($server, $username, $password, $dbname);

// $result = $connection->query("SELECT first_name FROM pending_tutors LIMIT 10");
// $result = $connection->query("INSERT INTO pending_tutors(first_name,last_name,email,password,age,gender,phone_number,city,education_level_tutor,educational_institution_name,field,years_of_experience,course_1,course_level_1,course_2,course_level_2,course_3,course_level_3,course_4,course_level_4,cv,image,description) VALUES (alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii,alii)");
// print_r($result);
if($connection->connect_error){
	die("Failed");
}
print_r("Connected successfully");

?>