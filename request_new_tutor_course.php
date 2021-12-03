<?php
include("connection.php");
session_start();
$id = $_SESSION["user_id"];

//Course Details


//Tutor Details

    if(isset($_POST["tutor"]) && $_POST["tutor"]!="" && preg_match ("/^[a-zA-z ]*$/",$_POST["tutor"])){
        $tutor = $_POST["tutor"];
    }
    elseif(isset($_POST["tutor"]) && $_POST["tutor"]!="" && !preg_match ("/^[a-zA-z ]*$/",$_POST["tutor"])){
        die("Only letters and white space allowed"); //Since full name, we need to allow spacing
    }
    else{
        die("Name is required.");
    }

//Session Details





    if(isset($_POST["price"]) && $_POST["price"] !="" && preg_match("/^[0-9]*$/", $_POST["price"])){
        $price = $_POST["price"]; 
    }else if(isset($_POST["price"]) && $_POST["price"] !="" && !preg_match("/^[0-9]*$/", $_POST["price"])){
        die("Price option should be composed of numbers."); 
    }else{
        die("Price is required.");

    }






?>