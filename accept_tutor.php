<?php

include("connection.php");
$id = $_GET["id"];

echo("testttt");

$query = "SELECT * FROM  pending_tutors where temp_user_id=$id";
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->get_result(); 
$row = $results->fetch_assoc();



//We should check if tutor already in database;
$query= "SELECT * FROM users where email= ?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $row["email"]);
$stmt->execute();
$results = $stmt->get_result(); 
$tutor_row = $results->fetch_assoc();

//if not then we add tutor
if (empty($tutor_row)) {

$mysql = $connection->prepare("INSERT INTO users (type, first_name, last_name,email, phone_number, password) VALUES (2, ?, ?, ?,?,?);");
$mysql->bind_param("sssss", $row["first_name"], $row["last_name"], $row["email"], $row["phone_number"], $row["password"]);
$mysql->execute();

//we need to get user id before we add to tutors table
$query= "SELECT user_id FROM users where email= ?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $row["email"]);
$stmt->execute();
$results = $stmt->get_result(); 
$tutor_id= $results->fetch_assoc();


//tutor_ID 	user_id 
	// gender
    // years_of_experience 
    // 	education_level
    //      	major 	age 
    //          	city
    //               	college_name
    //                    	cv 	profile_image 
    //                        	description
$mysql = $connection->prepare("INSERT INTO tutors ( user_id, gender,years_of_experience,education_level ,major,	age ,city,college_name ,cv ,profile_image ,description)
 VALUES (?, ?, ?, ?,?,?,?,?,?,?,?);");
$mysql->bind_param("issssssssss", $tutor_id["user_id"], $row["gender"], $row["years_of_experience"], $row["education_level_tutor"], $row["field"],$row["age"],$row["city"],$row["educational_institution_name"], $row["cv"],$row["image"],$row["description"]);
if($mysql->execute()){
    die("working");
}
else{
    die("not working");
}

// $sql = "INSERT INTO tutors ( user_id, gender,years_of_experience,education_level ,major,	age ,city,college_name ,cv ,profile_image ,description)
//  VALUES ('19','dd','dd','dd','dd','dd','dd','dd','dd','dd',dd' );";

// if ($connection->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $connection->error;
//   }






}
else
{
    die("<br>Tutor already in database");
}
?>





