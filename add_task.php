<?php

include("connection.php");
session_start();
$id = $_SESSION["user_id"];

if(isset($_POST['title'])){
    echo("we are here");

    $title = $_POST['title'];
    if(empty($title)){
        header("Location: ../index.php?mess=error");
    }else {
        $stmt = $connection->prepare("INSERT INTO todo(user_id,title) VALUE(?,?)");
        $stmt->bind_param("is",$id, $title);
        $stmt->execute();
        $res= $stmt->get_result();

        if($res){
            header("Location: todolist2.php"); 
        }else {
            header("Location: todolist2.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: todolist2.php");
}