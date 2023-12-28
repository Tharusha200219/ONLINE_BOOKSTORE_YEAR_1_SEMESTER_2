<?php

require 'config.php';

$Fname = $_POST["firstname"];
$Lname = $_POST["lastname"];
$Add = $_POST["address"];
$cit = $_POST["city"];
$sta = $_POST["state"];
$zi = $_POST["zipcode"];
$cr = $_POST["cardnum"];
$exm = $_POST["month"];
$exy = $_POST["year"];
$cv = $_POST["cvv"];

$sql = "INSERT INTO cart (FirstName,LastName,Aaddress,City,State,ZIpCode,CRD,EXmonth,EXyear,CVV)
 VALUES ('$Fname', '$Lname', '$Add', '$cit', '$sta','$zi','$cr','$exm','$exy','$cv')";
 
if($conn->query($sql)){
    echo "<script>alert('ERROR:' could not able to execute the query ')</script>";
    header("location:/online_bookstore/user_page/AFTER_LOGIN_user_home_page.php");
}
else{
    echo"<script>alert('ERROR:could not able to execute the query.')</script>";
    echo $sql;
}



?>