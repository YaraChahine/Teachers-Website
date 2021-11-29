<?php

include("connection.php");

//Personal Information

if (isset($_POST["first_name"]) && $_POST["first_name"] != "" && preg_match("/^[a-zA-z]*$/", $_POST["first_name"])){
    $first_name = $_POST["first_name"]; //check variable is set and not null && make sure input is composed of only alphabets
}else if (isset($_POST["first_name"]) && $_POST["first_name"] != "" && !preg_match("/^[a-zA-z]*$/", $_POST["first_name"])) {
    die("First name should only contain alphabets."); //if input is not made of alphabets then it prints out this message
}else{
    die("We're not stupid 👀 1");
}

if(isset($_POST["last_name"]) && $_POST["last_name"] != "" && preg_match("/^[a-zA-z]*$/", $_POST["last_name"])){
    $first_name = $_POST["last_name"]; //check variable is set and not null && make sure input is composed of only alphabets
}else if (isset($_POST["last_name"]) && $_POST["first_name"] != "" && !preg_match("/^[a-zA-z]*$/", $_POST["last_name"])) {
    die("Last name should only contain alphabets."); //if input is not made of alphabets then it prints out this message
}else{
    die("We're not stupid 👀 2");
}

if(isset($_POST["phone_number"]) && $_POST["phone_number"] !="" && preg_match("/^[0-9]*$/", $_POST["phone_number"])){
    $phone_number = $_POST["phone_number"]; //check variable is set and not null && make sure input is composed of only numbers
}else if(isset($_POST["phone_number"]) && $_POST["phone_number"] !="" && !preg_match("/^[0-9]*$/", $_POST["phone_number"])){
    die("Phone number should contain numbers only."); //if input is not composed of only numbers it wont be accepted
}else{
    die("We're not stupid 👀 3");
}

if(isset($_POST["email_address"]) && $_POST["email_address"] != "" && filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)){
    $first_name = $_POST["email_address"]; //check variable is set and not null && filter the specified variable to check its in email format
}else if (isset($_POST["email_address"]) && $_POST["email_address"] != "" && !filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)) {
    die("Incorrect email format"); //if input is not an email it wont be accepted
}else{
    die("We're not stupid 👀 4");
}


if(isset($_POST["password"]) && $_POST["password"] != "" && preg_match('@[A-Z]@', $_POST["password"]) && preg_match('@[a-z]@',  $_POST["password"]) && preg_match('@[0-9]@',  $_POST["password"]) && preg_match('@[^\w]@',  $_POST["password"]) && strlen($_POST["password"]) > 7 && strlen($_POST["password"]) < 21){
    $password = hash("sha256",$_POST["password"]);//check variable is set and not null && accepts these symbols for the password composition and hashes the password for extra security
}else if(isset($_POST["password"]) && $_POST["password"] != "" && !preg_match('@[A-Z]@', $_POST["password"]) || !preg_match('@[a-z]@',  $_POST["password"]) || !preg_match('@[0-9]@',  $_POST["password"]) || !preg_match('@[^\w]@',  $_POST["password"]) || strlen($_POST["password"]) < 8 || strlen($_POST["password"]) > 20){
    die("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.");
}else{
    die("We're not stupid 👀 5");
}

//Course Details

if(isset($_POST["education"]) && $_POST["education"] != "" && preg_match("/^[0-9]*$/", $_POST["education"]) && $_POST["education"] >= 0 &&  $_POST["education"] <= 3){
    $education_level_student = $_POST["education"];
}else{
    die("We're not stupid 👀 6");
}
if ($education_level_student == "college") {
    if(isset($_POST["course-name"]) && $_POST["course-name"]!=""){ //for education level = college
        $course_choice = $_POST["course-name"];
    }else{
        die("We're not stupid 👀 7");
    }
}
else {
    if(isset($_POST["menu-course"]) && $_POST["menu-course"]!=""){ //for education levels != college
        $course_choice = $_POST["menu-course"];
    }else{
        die("We're not stupid 👀 8");
    }
}


//Tutor Details

if(isset($_POST["tutor"]) && $_POST["tutor"] != "" && preg_match("/^[0-9]*$/", $_POST["tutor"]) && $_POST["tutor"] >= 0){
    $tutor = $_POST["tutor"];
}else{
    die("We're not stupid 👀 9");
}

//Session Details


if(isset($_POST["date"]) && $_POST["date"] != "" && preg_match("/^(0[1-9]|1[0-2])\\(0[1-9]|[1-2][0-9]|3[0-1])\\([2-9][0-9][2-9][1-9])$/", $_POST["date"])){
    $date = $_POST["date"];
}else if(isset($_POST["date"]) && $_POST["date"] != "" && !preg_match("/^(0[1-9]|1[0-2])\\(0[1-9]|[1-2][0-9]|3[0-1])\\([2-9][0-9][2-9][1-9])$/", $_POST["date"])){
    die("Enter correct date format");
}else{
    die("We're not stupid 👀 10");
}



//come back to do the dates




if(isset($_POST["price"]) && $_POST["pricer"] !="" && preg_match("/^[0-9]*$ - ^[0-9]*$/", $_POST["price"])){
    $price = $_POST["price"]; //check variable is set and not null && make sure input is composed of only numbers
}else if(isset($_POST["price"]) && $_POST["price"] !="" && !preg_match("/^[0-9]*$ - ^[0-9]*$/", $_POST["price"])){
    die("Price option should be composed of numbers."); //if input is not composed of only numbers it wont be accepted
}else{
    die("We're not stupid 👀 2");

}




    $mysql1 = $connection->prepare("SELECT * FROM users WHERE email = ?");
    $mysql1->bind_param("s", $email_address);
    $mysql1->execute();
    $results1 = $mysql1->get_result();
    $row1 = $results1->fetch_assoc();
    if(empty($row1)) {
        $mysql2 = $connection->prepare("SELECT * FROM pending_students WHERE email = ?");
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
        $mysql = $connection->prepare("INSERT INTO pending_students(first_name,last_name,phone_number,email,password,education_level_student,course,preferred_tutor, starting_date,days_of_sessions,price) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $mysql->bind_param("ssssdsssdssdsssssssssss",$first_name,$last_name,$phone_number,$email_address,$password,$education_level_student,$course_choice,$tutor, $date,$session_days,$price);
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