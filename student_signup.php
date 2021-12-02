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
    $last_name = $_POST["last_name"]; //check variable is set and not null && make sure input is composed of only alphabets
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

if(isset($_POST["email_address"]) && $_POST["email_address"]!="" && filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)){
    $email_address = $_POST["email_address"];
}else if(isset($_POST["email_address"]) && $_POST["email_address"]!="" && !filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)){
    die("Incorrect email format.");
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

if(isset($_POST["education"]) && $_POST["education"] != "" ){
    $education_level_student = $_POST["education"];
}else{
    die("We're not stupid 👀6");
}
   

if ($education_level_student == "college") {
    if(isset($_POST["course-name"]) && $_POST["course-name"]!=""){ //for education level = college
        $course_choice = $_POST["course-name"];
    }else{
        die("We're not stupid 👀 7");
    }
}
elseif($education_level_student != "college") {
    if(isset($_POST["menu-course"]) && $_POST["menu-course"]!=""){ //for education levels != college
        $course_choice = $_POST["menu-course"];
    }else{
        die("We're not stupid 👀 8");
    }
}
else{
    die("We're not stupid 👀 9");
}


//Tutor Details

if(isset($_POST["tutor"]) && $_POST["tutor"] != "" && preg_match("/^[0-9]*$/", $_POST["tutor"]) && $_POST["tutor"] >= 0){
    $tutor = $_POST["tutor"];
}else{
    die("We're not stupid 👀 10");
}

//Session Details


if(isset($_POST["date"]) && $_POST["date"] != "" && preg_match("/$/", $_POST["date"])){
    $date = $_POST["date"];
}else if(isset($_POST["date"]) && $_POST["date"] != "" && !preg_match("/$/", $_POST["date"])){
    die("Enter correct date format");
}else{
    die("We're not stupid 👀 11");
}

// if(isset($_POST["date"]) && $_POST["date"] != "" ){
//     $date = $_POST["date"];
// }else if(isset($_POST["date"]) && $_POST["date"] != "" ){
//     die("Enter correct date format");
// }else{
//     die("We're not stupid 👀 10");
// }



//come back to do the dates

$days_of_session = "";

if(isset($_POST["Monday"]) && $_POST["Monday"]!=""){
    $monday = $_POST["Monday"];
    $days_of_session = $monday + " ";
}


if(isset($_POST["Tuesday"]) && $_POST["Tuesday"]!=""){
    $tuesday = $_POST["Tuesday"];
    $days_of_session = $tuesday + " ";
}

if(isset($_POST["Wednesday"]) && $_POST["Wednesday"]!=""){
    $wednesday = $_POST["Wednesday"];
    $days_of_session = $wednesday + " ";
}


if(isset($_POST["Thursday"]) && $_POST["Thursday"]!=""){
    $thursday = $_POST["Thursday"];
    $days_of_session = $thursday + " ";
}


if(isset($_POST["Friday"]) && $_POST["Friday"]!=""){
    $friday = $_POST["Friday"];
    $days_of_session = $friday + " ";
}


if(isset($_POST["Saturday"]) && $_POST["Saturday"]!=""){
    $saturday = $_POST["Saturday"];
    $days_of_session = $saturday + " ";
}

if(isset($_POST["Sunday"]) && $_POST["Sunday"]!=""){
    $sunday = $_POST["Sunday"];
    $days_of_session = $sunday + " ";
}


if ($_POST["Sunday"]="" && $_POST["Saturday"]="" && $_POST["Friday"]="" && $_POST["Thursday"]="" && $_POST["Tuesday"]="" &&$_POST["Monday"]=""){
    //Blank string, add error to $errors array.        
    $errors['nodate'] = "Please let us know your prefered tutoring dates!";
}       


$days_of_sessionArray = []; //create an array to add them into it and then loop and add the days that were checked into the string
array_push($days_of_sessionArray, $monday);
array_push($days_of_sessionArray, $tuesday);
array_push($days_of_sessionArray, $wednesday);
array_push($days_of_sessionArray, $thursday);
array_push($days_of_sessionArray, $friday);
array_push($days_of_sessionArray, $saturday);
array_push($days_of_sessionArray, $sunday);


$days_of_session = "";

foreach($days_of_sessionArray as $item) {
    if ($item == Yes ){
         $days_of_session = $item + '';
    }
}

// // Or 
// $cart = array();
// array_push($cart, 13, 14);




if(isset($_POST["price"]) && $_POST["price"] !="" && preg_match("/^[0-9]*$/", $_POST["price"])){
    $price = $_POST["price"]; //check variable is set and not null && make sure input is composed of only numbers
}else if(isset($_POST["price"]) && $_POST["price"] !="" && !preg_match("/^[0-9]*$/", $_POST["price"])){
    die("Price option should be composed of numbers."); //if input is not composed of only numbers it wont be accepted
}else{
    die("We're not stupid 👀 12");

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
        $mysql = $connection->prepare("INSERT INTO pending_students(first_name,last_name,phone_number,email,password,education_level_student,course,preferred_tutor,starting_date,days_of_sessions,price) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $mysql->bind_param("ssssssssdss",$first_name,$last_name,$phone_number,$email_address,$password,$education_level_student,$course_choice,$tutor,$date,$days_of_session,$price);
       }else {  
            die("Email already exists");
           }
        if (!$mysql->execute()){
            echo ("\n");
            echo($mysql->error);
        }
        echo $connection->error;
        $mysql->close();
        $connection->close();
        
        
     header("Location: index.html");

?>