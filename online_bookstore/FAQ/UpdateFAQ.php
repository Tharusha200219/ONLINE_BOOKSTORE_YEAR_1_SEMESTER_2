<?php
    require 'config.php';
    
    // using a ternary operator to assign a value to the variable $id.
    /*In simpler terms, the code checks if the 'id' key exists in the $_POST array. If it does, the value of $_POST['id'] is assigned to $id. 
    If it doesn't exist, an empty string is assigned to $id. 
    This ensures that $id always has a value, either the actual 'id' value from $_POST or an empty string if it's not present.*/

    $id = isset($_POST['id']) ? $_POST['id'] : '';

    $name = $_POST["name"];
    $address = $_POST["address"];
    $desc = $_POST["description"];
    $email = $_POST["email"];

    $sql = "UPDATE faqq SET name = '$name', address = '$address', description = '$desc', email = '$email' WHERE fid = $id";

    if($conn -> query($sql)){
        
        echo "<script> alert('Records Updated successfully !!!!')</script>";
        header("location:adminFAQ.php");
    }
    else{
        echo "<script> alert('ERROR: could not able to execute the query. ')</script>";
        echo $sql;
    }


?>
