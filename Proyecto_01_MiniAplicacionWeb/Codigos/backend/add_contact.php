<?php
session_start();
include("../config/db.php");

$name = $conn->real_escape_string($_POST["name"]);
$phone = $conn->real_escape_string($_POST["phone"]);
$user_id = $_SESSION["user_id"];

$sql = "INSERT INTO contacts (name, phone, user_id)
        VALUES ('$name', '$phone', '$user_id')";

if($conn->query($sql) === TRUE){
    echo "Contacto guardado";
    echo "<br><a href='../frontend/dashboard.php'>Volver</a>";
} else {
    echo "Error";
}
?>