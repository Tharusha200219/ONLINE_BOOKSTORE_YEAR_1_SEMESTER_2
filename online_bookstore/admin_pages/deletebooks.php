<?php

require 'config.php';

// Get the book id from the URL
$id = $_GET['id'];

// Delete the book from the database
$sql = "DELETE FROM addbook WHERE book_id = $id";
$result = $conn->query($sql);

if ($result) {
    echo "<script> alert('Book deleted successfully !!!!')</script>";
    header("location:Addbooks.php");
} else {
    echo "<script> alert('ERROR: could not able to delete the book. ')</script>";
    echo $sql;
}

?>