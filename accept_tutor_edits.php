<?php

include("connection.php");
$id = $_GET["id"];


$query_add = "INSERT INTO tutors where tutor_ID = $id";
$stmt = $connection->prepare($query_add);
$stmt->execute();

$query = "DELETE FROM tutor_edit_requests where id = $id";
$stmt = $connection->prepare($query);
$stmt->execute();


header("Location: admin_updates.php");
?>