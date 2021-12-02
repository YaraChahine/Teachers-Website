<?php

include("connection.php");
$id = $_GET["id"];


$query = "DELETE FROM  consultation where id=$id";
$stmt = $connection->prepare($query);
$stmt->execute();


header("Location: admin_updates.php");
?>