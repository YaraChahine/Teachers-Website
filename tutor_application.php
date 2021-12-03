<?php

include("connection.php");


if(isset($_POST["first_name"]) && $_POST["first_name"]!="" && preg_match ("/^[a-zA-z]*$/",$_POST["first_name"])){
    $first_name = $_POST["first_name"];
}else if(isset($_POST["first_name"]) && $_POST["first_name"]!="" && !preg_match ("/^[a-zA-z]*$/",$_POST["first_name"])){
    die("First name should only contains alphabets.");
}else{
    die("Nice try Dr. :D 1");
}
if(isset($_POST["last_name"]) && $_POST["last_name"]!="" && preg_match ("/^[a-zA-z]*$/",$_POST["last_name"])){
    $last_name = $_POST["last_name"];
}else if(isset($_POST["last_name"]) && $_POST["last_name"]!="" && !preg_match ("/^[a-zA-z]*$/",$_POST["last_name"])){
    die("Last name should only contains alphabets.");
}else{
    die("Nice try Dr. :D 2");
}
if(isset($_POST["email_address"]) && $_POST["email_address"]!="" && filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)){
    $email_address = $_POST["email_address"];
}else if(isset($_POST["email_address"]) && $_POST["email_address"]!="" && !filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)){
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
if(isset($_POST["age"]) && $_POST["age"]!="" && preg_match("/^[0-9]*$/", $_POST["age"]) && $_POST["age"]>17 &&  $_POST["age"]<61){
    $currentYear = intval(date("Y"));
    $year_born = $currentYear - $_POST["age"];
    
}else if(isset($_POST["age"]) && $_POST["age"]!="" && (!preg_match("/^[0-9]*$/", $_POST["age"]) || $_POST["age"]>60 || $_POST["age"]<18)){
    die("Phone number should contain numbers only. Required age:18-60");
}else{
    die("Nice try Dr. :D 5");
}
if(isset($_POST["gender"]) && $_POST["gender"]!="" && (strcmp(($_POST["gender"]),"Male")==0 || strcmp(($_POST["gender"]),"Female")==0 || strcmp(($_POST["gender"]),"Other")==0)){
    $gender = $_POST["gender"];
}else if (isset($_POST["gender"]) && $_POST["gender"]!="" && strcmp(($_POST["gender"]),"Male")!=0 && strcmp(($_POST["gender"]),"Female")!=0 && strcmp(($_POST["gender"]),"Other")!=0){
    die("No other choices.");
}else{
    die("Nice try Dr. :D 6");
}
if(isset($_POST["phone_number"]) && $_POST["phone_number"]!="" && preg_match("/^[0-9]*$/", $_POST["phone_number"])){
    $phone_number = $_POST["phone_number"];
}else if(isset($_POST["phone_number"]) && $_POST["phone_number"]!="" && !preg_match("/^[0-9]*$/", $_POST["phone_number"])){
    die("Phone number should contain numbers only.");
}else{
    die("Nice try Dr. :D 7");
}
if(isset($_POST["city"]) && $_POST["city"]!="" && preg_match ("/^[a-zA-z]*$/",$_POST["city"])){
    $city = $_POST["city"];
}else if(isset($_POST["city"]) && $_POST["city"]!="" && !preg_match ("/^[a-zA-z]*$/",$_POST["city"])){
    die("City name should not contain numbers");
}else{
    die("Nice try Dr. :D 8");
}
if(isset($_POST["education_level"]) && $_POST["education_level"]!="" && preg_match("/^[0-9]*$/", $_POST["education_level"]) && $_POST["education_level"]>=0 &&  $_POST["education_level"]<=3){
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
if(isset($_POST["years"]) && $_POST["years"]!="" && preg_match("/^[0-9]*$/", $_POST["years"]) && $_POST["years"]>=0){
    $years_of_experience = $_POST["years"];
}else if(isset($_POST["years"]) && $_POST["years"]!="" && (!preg_match("/^[0-9]*$/", $_POST["years"]) || $_POST["years"]<0)){
    die("Years of experience should contain numbers only.");
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
if ($course_level_2 == "none") {
    $course_2 = "none";
}
else if ($course_level_2 == "college") {
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
if ($course_level_3 == "none") {
    $course_3 = "none";
}
else if ($course_level_3 == "college") {
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
if ($course_level_4 == "none") {
    $course_4 = "none";
}
else if ($course_level_4 == "college") {
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

  

 if (isset($_FILES["cv_file"]) && $_FILES["cv_file"]["error"] != UPLOAD_ERR_NO_FILE) {
    
    $cv_file = (str_replace(".", "", microtime(true)));
    $ext = pathinfo($_FILES["cv_file"]["name"], PATHINFO_EXTENSION);
    $cv_file = $cv_file . "." . $ext;

    $tempname = $_FILES["cv_file"]["tmp_name"];
    
    $folder = __DIR__ ."\\pending\\".$cv_file;
    
    $mime = mime_content_type($tempname); //make sure file uploaded is pdf
    
    if ((strcasecmp($mime, "application/pdf") == 0)) {
        if (!move_uploaded_file($tempname, $folder))  {
            die("Error in saving pdf file to server, try again");
        }
    }
    else {
        die("Invalid pdf file.");
    }

} else {
    die("Nice try Dr. :D 25");
}


if (isset($_FILES["img_file"]) && $_FILES["img_file"]["error"] != UPLOAD_ERR_NO_FILE) {
    $img_file = (str_replace(".", "", microtime(true)));
    $ext = pathinfo($_FILES["img_file"]["name"], PATHINFO_EXTENSION);
    $img_file = $img_file . "." . $ext;

    $tempname = $_FILES["img_file"]["tmp_name"];
    
    $folder = __DIR__ ."\\pending\\".$img_file;
    
    $mime = mime_content_type($tempname);
	$type = substr($mime, 0, strpos($mime, "/")); //make sure file uploaded is image
    
    if ((strcasecmp($type, "image") == 0)) {
        if (!move_uploaded_file($tempname, $folder))  {
            die("Error in saving image file to server, try again");
        }
    }
    else {
        die("Invalid image file.");
    }
} else {
    die("Nice try Dr. :D 26");
}





if(isset($_POST["bio"]) && $_POST["bio"]!=""){
    $bio = $_POST["bio"];
}else{
    die("Nice try Dr. :D 27");
}
$mysql1 = $connection->prepare("SELECT * FROM users WHERE email = ?");
$mysql1->bind_param("s", $email_address);
$mysql1->execute();
$results1 = $mysql1->get_result();
$row1 = $results1->fetch_assoc();
if(empty($row1)) {
    $mysql2 = $connection->prepare("SELECT * FROM pending_tutors WHERE email = ?");
    $mysql2->bind_param("s", $email_address);
    $mysql2->execute();
    $results2 = $mysql2->get_result();
    $row2 = $results2->fetch_assoc();
  }else {  
   die("Email already exists");
  }
   if(empty($row2)) {
    $mysql3 = $connection->prepare("SELECT * FROM pending_students WHERE email = ?");
    $mysql3->bind_param("s", $email_address);
    $mysql3->execute();
    $results3 = $mysql3->get_result();
    $row3 = $results3->fetch_assoc();
}else {  
    die("Email already exists");
   }
   if(empty($row3)) {

    $mysql = $connection->prepare("INSERT INTO pending_tutors(first_name,last_name,email,password,year_born,gender,phone_number,city,education_level_tutor,educational_institution_name,field,years_of_experience,course_1,course_level_1,course_2,course_level_2,course_3,course_level_3,course_4,course_level_4,cv,image,description) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $mysql->bind_param("ssssdssssssdsssssssssss",$first_name,$last_name,$email_address,$password,$year_born,$gender,$phone_number,$city,$education_level_tutor,$educational_institution_name,$field,$years_of_experience,$course_1,$course_level_1,$course_2,$course_level_2,$course_3,$course_level_3,$course_4,$course_level_4,$cv_file,$img_file,$bio);
    $to_email = "ali.knayber@lau.edu";
    $subject = "Teachers Tutor Application";
    $body = "Hello Admin! A new Tutor Application from $first_name $last_name!!! is waiting for you.";
    $headers = "From: yarachahine77@gmail.com";
    
    mail($to_email, $subject, $body, $headers);

    }else {  

        die("Email already exists");
       }
    if (!$mysql->execute()){
        echo ("\n");
        echo($mysql->error);
    }
    $mysql->close();
    $connection->close();
    
 header("Location: index.html");
?>