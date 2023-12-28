<?php

require 'connection.php';

// Get the book id from the URL
$id = $_GET['id'];

// Delete the book from the database
$sql = "DELETE FROM reviews WHERE rid = $id";
$result = $conn->query($sql);

if ($result) {
    echo "<script> alert('Book deleted successfully !!!!')</script>";
    header("location:display.php");
} else {
    echo "<script> alert('ERROR: could not able to delete the book. ')</script>";
    echo $sql;
}

?>