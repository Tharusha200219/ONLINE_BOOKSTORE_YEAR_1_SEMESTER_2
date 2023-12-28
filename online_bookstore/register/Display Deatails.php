<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href = "styles/style2.css">
    <title>Document</title>
</head>
<body>
<?php
//creating connection
$servername="localhost";
$username="root";
$password="";
$database_name="logininfor";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
?>


<table class="content-table">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Password</th>
      <th scope="col">Update/Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql="Select * from userdetails";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
     $firstname = $row['firstname'];
	 $lastname = $row['lastname'];
     $date = $row['date'];
	 $gender = $row['gender'];
	 $email = $row['email'];
	 $mnumber = $row['mnumber'];
     $password = $row['password'];
     echo '<tr>
     <td>'.$firstname.'</td>
     <td>'.$lastname.'</td>
     <td>'.$date.'</td>
     <td>'.$gender.'</td>
     <td>'.$email.'</td>
     <td>'.$mnumber.'</td>
     <td>'.$password.'</td>
     <td>
    <button> <a href="update.php?updateid='.$mnumber.'"> Update </a> </button>
    <button> <a href="delete.php?deleteid='.$mnumber.'"> Delete </a> </button>
    </td>
     </tr>';
    }
}

?>

  </tbody>
</table>
<a href="Register.html"> <button class="btn" type = "submit" name ="submit" > Create New Account </button> </a>
</body>
</html>