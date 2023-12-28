<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="logininfor";

$conn = new mysqli($servername, $username, $password,$db);

if (!$conn) {
    die(mysqli_error($conn));
}
?> 