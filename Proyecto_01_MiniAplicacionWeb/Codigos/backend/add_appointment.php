<?php
session_start();
include("../config/db.php");

$title = $conn->real_escape_string($_POST["title"]);
$date = $_POST["date"];
$user_id = $_SESSION["user_id"];

$sql = "INSERT INTO appointments (title, date, user_id)
        VALUES ('$title', '$date', '$user_id')";

if($conn->query($sql) === TRUE){
    echo "Cita guardada";
    echo "<br><a href='../frontend/dashboard.php'>Volver</a>";
} else {
    echo "Error";
}
?>