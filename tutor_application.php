<?php

include("connection.php");


if(isset($_POST["first_name"]) && $_POST["first_name"]!=""){
    $first_name = $_POST["first_name"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["last_name"]) && $_POST["last_name"]!=""){
    $last_name = $_POST["last_name"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["email_address"]) && $_POST["email_address"]!=""){
    $email_address = $_POST["email_address"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["password"]) && $_POST["password"]!=""){
    $password = hash("sha256",$_POST["password"]);
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["age"]) && $_POST["age"]!=""){
    $age = $_POST["age"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["gender"]) && $_POST["gender"]!=""){
    $gender = $_POST["gender"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["phone_number"]) && $_POST["phone_number"]!=""){
    $phone_number = $_POST["phone_number"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["city"]) && $_POST["city"]!=""){
    $city = $_POST["city"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["years"]) && $_POST["years"]!=""){
    $years = $_POST["years"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["education_level"]) && $_POST["education_level"]!=""){
    $education_level = $_POST["education_level"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["school"]) && $_POST["school"]!=""){
    $school = $_POST["school"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["years"]) && $_POST["years"]!=""){
    $years = $_POST["years"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["course1-input"]) && $_POST["course1-input"]!=""){
    $course1_select = $_POST["course1-input"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["course1-level"]) && $_POST["course1-level"]!=""){
    $course1_level = $_POST["course1-level"];
}else{
    die("Nice try Dr. :D ");
}

if($_POST["course2-input"]!=""){
    $course2_level = $_POST["course2-input"];
    $course2_select = $_POST["course2-level"];
}
if($_POST["course3-input"]!=""){
    $course3_level = $_POST["course3-input"];
    $course3_select = $_POST["course3-level"];
}
if($_POST["course4-input"]!=""){
    $course4_level = $_POST["course4-input"];
    $course4_select = $_POST["course4-level"];
}
if(isset($_POST["cv_file"]) && $_POST["cv_file"]!=""){
    $cv_file = $_POST["cv_file"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["img_file"]) && $_POST["img_file"]!=""){
    $img_file = $_POST["img_file"];
}else{
    die("Nice try Dr. :D ");
}
if(isset($_POST["bio"]) && $_POST["bio"]!=""){
    $bio = $_POST["bio"];
}else{
    die("Nice try Dr. :D ");
}


$mysql = $connection->prepare("INSERT INTO pending_tutors(first_name,last_name,email,password,age,gender,phone_number,city,education_level_tutor,educational_institution_name,field,years_of_experience,course_1,course_level_1,course_2,course_level_2,course_3,course_level_3,course_4,course_level_4,cv,image,description) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$mysql->bind_param("ssssissssssisssssssssss",$first_name,$last_name,$email,$password,$age,$gender,$phone_number,$city,$education_level_tutor,$educational_institution_name,$field,$years_of_experience,$course_1,$course_level_1,$course_2,$course_level_2,$course_3,$course_level_3,$course_4,$course_level_4,$cv_file,$img_file,$bio);
$mysql->execute();
$mysql->close();
$connection->close();

// header("Location:tutor_application.html");
 print_r($first_name);
?>