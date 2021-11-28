<?php
include("connection.php");
session_start();
$id = $_SESSION["user_id"];
if(isset($_POST['id'])){
    include("connection.php");

    $id = $_POST['id'];

    if(empty($id)){
       echo 0;
    }else {
        $stmt = $connection->prepare("DELETE FROM todo WHERE id=?");
      

        $stmt->bind_param("i",$id);
        $stmt->execute();
        $res= $stmt->get_result();

        if($res){
            echo 1;
        }else {
            echo 0;
        }
        $connection = null;
        exit();
    }
}else {
    header("Location: todolist2.php");
}