<?php

include("connection.php");

$firstname= $_POST["first"];
$lastname= $_POST["last"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$type = $_POST["select"];

$query="SELECT user_id FROM users where email=?";
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$results = $stmt->get_result(); 
$row = $results->fetch_assoc();

if(!empty($row)){
$id= $row["user_id"];

if ($type=="student"){
$query="DELETE FROM students where user_id=$id";
$stmt = $connection->prepare($query);
$stmt->execute();
}
elseif ($type=="tutor") {
    $query="DELETE FROM tutors where user_id=$id";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

$query="DELETE FROM users where user_id=$id";
$stmt = $connection->prepare($query);
$stmt->execute();

echo("here");
header('Location: admin_page_remove_success.html');
}
else
{
    header('Location: admin_page_remove_error.html');
}

?>