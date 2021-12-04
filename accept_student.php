<?php

include("connection.php");
$id = $_GET["id"];

$query = "SELECT * FROM pending_students where temp_student_id = $id";
$stmt = $connection->prepare($query);
$stmt-> execute();
$results = $stmt->get_result();
$row = $results->fetch_assoc();


//first step to see if student exists already in the database

$query = "SELECT * FROM users where email = ?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $row["email"]);
$stmt->execute();
$results = $stmt->get_result(); 
$tutor_row = $results->fetch_assoc();
//if not then add student into users table

if (empty($student_row)){

    $mysql = $connection->prepare("INSERT INTO users (type, first_name, last_name,email, phone_number, password) VALUES (3, ?,?,?,?,?);");
    $mysql->bind_param("sssss", $row["first_name"], $row["last_name"], $row["email"], $row["phone_number"], $row["password"]);
    $mysql->execute();

    //before adding to students table we must get the user_id


    $query= "SELECT user_id FROM users where email= ?;";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $row["email"]);
    $stmt->execute();
    $results = $stmt->get_result(); 
    $student_id= $results->fetch_assoc();

    //now we can add to students table
    $mysql = $connection->prepare("INSERT INTO students (user_id, price_range)
     VALUES (?, ?);");
    $mysql->bind_param("dd", $student_id["user_id"], $row["price"]);
    ($mysql->execute());


    $query= "SELECT student_id FROM students where user_id= ?;";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("d",  $student_id["user_id"]);
    $stmt->execute();
    $results = $stmt->get_result(); 
    $student_ID= $results->fetch_assoc();



    $query= "SELECT * FROM courses where course_name=? and course_level=?;";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss", $row["course"], $row["education_level_student"]);
    $stmt->execute();
    $results = $stmt->get_result(); 
    $courses_row = $results->fetch_assoc();
    
    if(empty($courses_row)){
        
        $query= "INSERT into courses(course_name,course_level) values(?,?);";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ss", $row["course"], $row["education_level_student"]);
        $stmt->execute();
    
        $query2= "SELECT course_id from courses where course_name=?; ";
        $stmt2 = $connection->prepare($query2);
        $stmt2->bind_param("s", $row["course"]);
        $stmt2->execute();
        $results = $stmt2->get_result(); 
        $course_id = $results->fetch_assoc();
    
    
        $query3= "INSERT into tutor_courses(course_id, tutor_id) values(?,?);";
        $stmt2 = $connection->prepare($query3);
        $stmt2->bind_param("ii", $course_id["course_id"], $row["preferred_tutor"]);
        $stmt2->execute();

        
        $query3= "INSERT into bookings(student_id,tutor_id,course_id,starting_date,days_of_sessions) values(?,?,?,?,?);";
        $stmt2 = $connection->prepare($query3);
        $stmt2->bind_param("iiiss",$student_ID["student_id"],$row["preferred_tutor"], $course_id["course_id"], $row["starting_date"], $row["days_of_sessions"]);
        $stmt2->execute();
    
        
    }
    else
    {
        
        $query2= "SELECT course_id from courses where course_name=?; ";
        $stmt2 = $connection->prepare($query2);
        $stmt2->bind_param("s", $row["course"]);
        $stmt2->execute();
        $results = $stmt2->get_result(); 
        $course_id = $results->fetch_assoc();
    
    
        $query3= "INSERT into bookings(student_id,tutor_id,course_id,starting_date,days_of_sessions) values(?,?,?,?,?);";
        $stmt2 = $connection->prepare($query3);
        $stmt2->bind_param("iiiss",$student_ID["student_id"],$row["preferred_tutor"], $course_id["course_id"], $row["starting_date"], $row["days_of_sessions"]);
        $stmt2->execute();
    }

    //since they are officially students, now we must remove them from pending_students
    $query = "DELETE FROM pending_students where temp_student_id = ?;";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $row["temp_student_id"]);
    $stmt->execute();

    header('Location: admin_updates.php');
  

}
// else already exists
else{
    die("Student account already exists");
}



?>