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

<?php

if(isset($_GET['deleteid'])){
    $mnumber=$_GET['deleteid'];

    $sql="delete from userdetails where mnumber=$mnumber";
    $result=mysqli_query($conn,$sql);
    if($result){
        header ('location:Display Deatails.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>