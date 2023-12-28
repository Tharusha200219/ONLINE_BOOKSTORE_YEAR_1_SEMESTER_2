<?php
include 'connect.php';
$ccc = $_GET['deleteid'];




    $sql = "DELETE FROM `spo` WHERE offerid='$ccc'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script type="text/javascript">';
echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
echo '</script>';
        header("location:display.php");
    } else {
        die(mysqli_error($conn));
    }

?>



