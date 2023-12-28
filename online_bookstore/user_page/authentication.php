<?php      
    include('connection.php');  
    $username = $_POST['id'];  
    $email = $_POST['email'];  
    $password = $_POST['password'];  

        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  

        $sql = "select *from userdetails where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
    
        if($count == 1){  
            header("Location:AFTER_LOGIN_user_home_page.php");
        }  
        else{  
            echo"error";  
        }     
?>