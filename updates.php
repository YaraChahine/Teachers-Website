<?php

include("connection.php");

$query = "SELECT temp_user_id ,first_name, last_name,email,phone_number FROM  pending_tutors";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result();

while($row = $results->fetch_assoc()){
    echo($row["first_name"]."<br>");
}

?>