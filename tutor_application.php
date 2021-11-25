<?php

include("connection.php");


if(isset($_POST["first_name"]) && $_POST["first_name"]!=""){
    $first_name = $_POST["first_name"];
}else{
    die("Nice try Dr. :D 1");
}
if(isset($_POST["last_name"]) && $_POST["last_name"]!=""){
    $last_name = $_POST["last_name"];
}else{
    die("Nice try Dr. :D 2");
}
if(isset($_POST["email_address"]) && $_POST["email_address"]!=""){
    $email_address = $_POST["email_address"];
}else{
    die("Nice try Dr. :D 3");
}
if(isset($_POST["password"]) && $_POST["password"]!=""){
    $password = hash("sha256",$_POST["password"]);
}else{
    die("Nice try Dr. :D 4");
}
if(isset($_POST["age"]) && $_POST["age"]!=""){
    $age = $_POST["age"];
}else{
    die("Nice try Dr. :D 5");
}
if(isset($_POST["gender"]) && $_POST["gender"]!=""){
    $gender = $_POST["gender"];
}else{
    die("Nice try Dr. :D 6");
}
if(isset($_POST["phone_number"]) && $_POST["phone_number"]!=""){
    $phone_number = $_POST["phone_number"];
}else{
    die("Nice try Dr. :D 7");
}
if(isset($_POST["city"]) && $_POST["city"]!=""){
    $city = $_POST["city"];
}else{
    die("Nice try Dr. :D 8");
}
if(isset($_POST["education_level"]) && $_POST["education_level"]!=""){
    $education_level_tutor = $_POST["education_level"];
}else{
    die("Nice try Dr. :D 9");
}
if(isset($_POST["school"]) && $_POST["school"]!=""){
    $educational_institution_name = $_POST["school"];
}else{
    die("Nice try Dr. :D 10");
}
if(isset($_POST["field"]) && $_POST["field"]!=""){
    $field = $_POST["field"];
}else{
    die("Nice try Dr. :D 11");
}
if(isset($_POST["years"]) && $_POST["years"]!=""){
    $years_of_experience = $_POST["years"];
}else{
    die("Nice try Dr. :D 12");
}


if(isset($_POST["course1-level"]) && $_POST["course1-level"]!=""){
    $course_level_1 = $_POST["course1-level"];
}else{
    die("Nice try Dr. :D 13");
}
if ($course_level_1 == "college") {
    if(isset($_POST["course1-input"]) && $_POST["course1-input"]!=""){
        $course_1 = $_POST["course1-input"];
    }else{
        die("Nice try Dr. :D 14");
    }
}
else {
    if(isset($_POST["course1-select"]) && $_POST["course1-select"]!=""){
        $course_1 = $_POST["course1-select"];
    }else{
        die("Nice try Dr. :D 15");
    }
}


if(isset($_POST["course2-level"]) && $_POST["course2-level"]!=""){
    $course_level_2 = $_POST["course2-level"];
}else{
    die("Nice try Dr. :D 16");
}
if ($course_level_2 == "college") {
    if(isset($_POST["course2-input"]) && $_POST["course2-input"]!=""){
        $course_2 = $_POST["course2-input"];
    }else{
        die("Nice try Dr. :D 17");
    }
}
else {
    if(isset($_POST["course2-select"]) && $_POST["course2-select"]!=""){
        $course_2 = $_POST["course2-select"];
    }else{
        die("Nice try Dr. :D 18");
    }
}


if(isset($_POST["course3-level"]) && $_POST["course3-level"]!=""){
    $course_level_3 = $_POST["course3-level"];
}else{
    die("Nice try Dr. :D 19");
}
if ($course_level_3 == "college") {
    if(isset($_POST["course3-input"]) && $_POST["course3-input"]!=""){
        $course_3 = $_POST["course3-input"];
    }else{
        die("Nice try Dr. :D 20");
    }
}
else {
    if(isset($_POST["course3-select"]) && $_POST["course3-select"]!=""){
        $course_3 = $_POST["course3-select"];
    }else{
        die("Nice try Dr. :D 21");
    }
}


if(isset($_POST["course4-level"]) && $_POST["course4-level"]!=""){
    $course_level_4 = $_POST["course4-level"];
}else{
    die("Nice try Dr. :D 22");
}
if ($course_level_4 == "college") {
    if(isset($_POST["course4-input"]) && $_POST["course4-input"]!=""){
        $course_4 = $_POST["course4-input"];
    }else{
        die("Nice try Dr. :D 23");
    }
}
else {
    if(isset($_POST["course4-select"]) && $_POST["course4-select"]!=""){
        $course_4 = $_POST["course4-select"];
    }else{
        die("Nice try Dr. :D 24");
    }
}

if (array_key_exists("cv_file", $_FILES) && isset($_FILES["cv_file"]) && $_FILES["cv_file"]["error"] != UPLOAD_ERR_NO_FILE) {

    $cv_file = "hi.pdf";

} else {
    die("Nice try Dr. :D ");
}

if (array_key_exists("img_file", $_FILES) && isset($_FILES["img_file"]) && $_FILES["img_file"]["error"] != UPLOAD_ERR_NO_FILE) {

    $img_file = "hi.png";

} else {
    die("Nice try Dr. :D ");
}


if(isset($_POST["bio"]) && $_POST["bio"]!=""){
    $bio = $_POST["bio"];
}else{
    die("Nice try Dr. :D ");
}

$mysql = $connection->prepare("INSERT INTO pending_tutors(first_name,last_name,email,password,age,gender,phone_number,city,education_level_tutor,educational_institution_name,field,years_of_experience,course_1,course_level_1,course_2,course_level_2,course_3,course_level_3,course_4,course_level_4,cv,image,description) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$mysql->bind_param("ssssdssssssdsssssssssss",$first_name,$last_name,$email_address,$password,$age,$gender,$phone_number,$city,$education_level_tutor,$educational_institution_name,$field,$years_of_experience,$course_1,$course_level_1,$course_2,$course_level_2,$course_3,$course_level_3,$course_4,$course_level_4,$cv_file,$img_file,$bio);
if ($mysql->execute()) {
    die("worked");
}
else {
    die("didnt work");
}
$mysql->close();
$connection->close();

// header("Location:tutor_application.html");
 print_r($first_name);
?>