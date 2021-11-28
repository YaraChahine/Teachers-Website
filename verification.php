<?php

session_start();

include("connection.php");

$code = $_SESSION["code"];
$user_id = $_SESSION["user_id"];

if (isset($_POST["code"]) && $_POST["code"] == $code) {
	$query = "SELECT * FROM temp_codes WHERE user_id = ? AND code = ?";
	$stmt = $connection->prepare($query);
	$stmt->bind_param("ds", $user_id, $code);
	$stmt->execute();
	$res = $stmt->get_result();
	$row = $res->fetch_assoc();

	$now = microtime(true);
    $now = substr($now, 0, strpos($now, "."));

	$created = $row["created"];

	$minutes = ($now - $created)/60;

    if ($minutes <= 10) {
        header('Location: change_password.html');
    }
	else {
        header('Location: expired.php');
    }

}
else {
	die ("wrong code");
}

?>