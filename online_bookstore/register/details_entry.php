
<?php
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

if(isset($_POST['save']))
{	
	 $firstname = $_POST['first_name'];
	 $lastname = $_POST['last_name'];
     $date = $_POST['dob'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];
	 $mnumber = $_POST['mobile'];
     $password = $_POST['pd'];

	 $sql_query = "INSERT INTO userdetails (firstname,lastname,date, gender,email,mnumber,password)
	 VALUES ('$firstname','$lastname','$date','$gender','$email','$mnumber','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		header ('location:../online_bookstore/user_page/login_page.html');
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>