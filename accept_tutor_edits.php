<?php

include("connection.php");
$id = $_GET["id"];

//Will fix later
$query_add = "INSERT INTO tutors() VALUES (?,?,?,?,?)";
$stmt = $connection->prepare($query_add);
$stmt->execute();

$query = "DELETE FROM tutor_edit_requests where id = $id";
$stmt = $connection->prepare($query);
$stmt->execute();


header("Location: admin_updates.php");
?>