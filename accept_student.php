<?php

include("connection.php");
$id = $_GET["id"]

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

//if not then add student

if (empty($student_row)){


}
// else already exists
else{
    die(" Student account already exists");
}



?>