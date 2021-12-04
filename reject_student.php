<?php

include("connection.php");
$id = $_GET["id"];


$query = "DELETE FROM  pending_students where temp_student_id=$id";
$stmt = $connection->prepare($query);
$stmt->execute();


header("Location: admin_updates.php");
?>