<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="logininfor";

$conn = new mysqli($servername, $username, $password,$db);

if ($conn->connect_error) {
    die("Payment Failed: " . $conn->connect_error);
   }
   echo "Payment Successfull ";
   ?>