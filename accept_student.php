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
    $mysql->bind_param("dd", $student_id["user_id"], $row["price_range"]);
    ($mysql->execute());

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