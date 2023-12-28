<?php
            require 'connection.php';
            $id = isset($_POST['id']) ? $_POST['id'] : '';
            
            $name = $_POST["name"];
            $rev = $_POST["review"];
            $mail = $_POST["email"];

            $sql = "UPDATE reviews SET name = '$name', review = '$rev', email = '$mail' WHERE rid = $id";


            if ($conn -> query($sql))
            {

                echo "<script> alert('Record updated successfully !')</script>";
                header("location:display.php");
            }
            else{
                echo "<script> alert('ERROR: could not able to execute the query. ')</script>";
                echo $sql;
            }
?>
   





    

