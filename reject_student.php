<?php

include("connection.php");
session_start();

if (isset($_SESSION["user_id"])&& strcmp($_SESSION["type"],"1")==0)
{
$id = $_GET["id"];


$query = "DELETE FROM  pending_students where temp_student_id=$id";
$stmt = $connection->prepare($query);
$stmt->execute();


header("Location: admin_updates.php");
else {header("Location: index.php");}
?>