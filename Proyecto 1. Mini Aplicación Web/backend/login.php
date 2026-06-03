<?php
session_start();
include("../config/db.php");

$username = $conn->real_escape_string($_POST["username"]);
$password = sha1($_POST["password"]);

$sql = "SELECT * FROM users 
        WHERE username='$username' 
        AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $_SESSION["user_id"] = $row["id"];
    header("Location: ../frontend/dashboard.php");
} else {
    echo "Credenciales incorrectas";
}
?>