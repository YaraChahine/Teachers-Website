
<?php

include("connection.php");
session_start();

if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "" && strcmp($_SESSION["type"],"2")==0 || strcmp($_SESSION["type"],"3")==0) {
    $id = $_SESSION["user_id"];
} else die ("invalid id");

if (!empty($_POST)) {

    $name = trim($_POST["item_name_calendar"]);
    $imp = trim($_POST["importance"]);
    $date = trim($_POST["date"]);

    if ($name != "" && $imp != "" && $date != "") {
        $query = "INSERT INTO calendar (user_id, item_name_calendar, importance, date) VALUES (?,?,?,?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("dsss", $id, $name, $imp, $date);
        $stmt->execute();
    }

}

?>