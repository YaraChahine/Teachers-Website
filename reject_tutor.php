<?php

include("connection.php");
$id = $_GET["id"];


$query = "DELETE FROM  pending_tutors where temp_user_id=$id";
$stmt = $connection->prepare($query);
$stmt->execute();

echo("hi");

header("Location: admin_updates.php");
?>