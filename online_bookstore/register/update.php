
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
$mnumber=$_GET['updateid'];
$sql="select * from userdetails where mnumber=$mnumber";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$date = $row['date'];
$gender = $row['gender'];
$email = $row['email'];
$mnumber = $row['mnumber'];
$password = $row['password'];

if(isset($_POST['submit']))
{	
	 $firstname = $_POST['first_name'];
	 $lastname = $_POST['last_name'];
     $date = $_POST['dob'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];
	 $mnumber = $_POST['mobile'];
     $password = $_POST['pd'];

	 $sql_query = "update userdetails set firstname='$firstname', lastname='$lastname',date='$date',gender='$gender', email='$email', mnumber='$mnumber', password='$password' where mnumber='$mnumber' ";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		header ('location:Display Deatails.php');
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>User Account page </title>
   
    <script src="C:/Users/ASUS/Desktop/dilmi/dilmi/js/myScript.js"></script>
    <style>
    *{
        margin: 0;
        padding: 0;

    }
    .main{
        width:100%;
        background:linear-gradient(to top, rgba(0,0,0,0.3)20%, rgba(0,0,0,0.3)20%),url(/dilmi/styles/image/bc.jpg)no-repeat;
        background-position:center;
        background-size:cover;
        height:100%;
        position: absolute;
    }
    .container{
        background:transparent;
        width:680px;
        height:566px;
        margin:auto;
        position:relative;
        margin-top:6%;
        font-size: 16px;
        padding:20px;
        background-color: Rgba(255, 255, 255, 0.5);
        border-radius: 10px;
    }
    .container:hover{
        box-shadow: 0 10px 15px rgba(0,0,0,.3);
        transform: scale(1.03);
    }
    
    .form{
        width:540px;
        height:450px;
        background-color:#4b6c9a;
        padding:45%;
        margin:45%;
        text-align: center;
        margin-left: 20%;
        
    
    
        
    
    }
    .tabShow{
        transition: all .5s ease-in;
        width: 80%;
        text-align: center;
    
    }

    
    .input,p{
        border:0;
        border-bottom:1px solid #000000;
        width:80%;
        font-family:'montserrant',sans-serif;
        font-size:.7em;
        padding:7px 0;
        color:#070707;
    }
    span{
        font-size:.7em;
        color:#777;
    }
    .tabShow{
        display:none;
    }
    .btn{
        width:240px;
        height:40px;
        outline:none;
        border:none;
        border-radius:10px;
        background-color:#ffffff;
        color:rgb(0, 0, 0);
        font-weight:600;
        text-transform:capitalize;
        margin-left: 32%;
        cursor:pointer;
        transition:0.5s;
        font-size: 20px;
    }
    .btn:hover{
        background-color:#71c4ff;
    }
    
    
    
    .tbl{
        width: 350px;
        height: 30px;
        margin-left: 23%;
        font-size: 15px;
        border-radius: 5px;
        border: #ffffff solid;
    }
    .tb{
        margin-left: 23%;

    }
    .upn{
        font-weight: 30%;
        text-shadow: 10px 10px 10px 10px;
        font-family: Arial, Helvetica, sans-serif;
        
    }
    .tblq{
        margin-left: 23%;
    }
    .tbq{
        margin-left: 23%;
    }
    .tbw{
        margin-left: 23%;
    }
    .latter{
        font-family:arial;
        font-size:22px;

    }
    .input{
        font-family:arial;
        font-size:22px;
    }
</style>

</head> 
<body>
<div class="main">
<form method="post"> 
    <div class ="container"> 
        <div class ="Profile tabshow">
            <h1>Personal Info</h1><br>
         <div class="blank_a">
            <h2 class="latter">First Name</h2>
            <input type="text" class="input" name="first_name" value = <?php echo $firstname;?>><br/>

            <h2 class="latter">Last Name</h2>
            <input type="text" class="input" name="last_name" value = <?php echo $lastname;?>><br/>

            <h2 class="latter">Date of Birth</h2>
            <input type="text" class="input" name="dob" value = <?php echo $date;?>><br/>

            <h2 class="latter">Gender</h2>
            <input type="text" class="input" name="gender" value = <?php echo $gender;?>><br/>

            <h2 class="latter">E-mail</h2>
            <input type="text" class="input" name="email" value = <?php echo $email;?>><br/>

            <h2 class="latter">Mobile Number</h2>
            <input type="text" class="input" name="mobile" value = <?php echo $mnumber;?>><br/>

            <h2 class="latter">Password</h2>
            <input type="password" class="input" name="pd" value = <?php echo $password;?>>

            <br>
             <button class="btn" type = "submit" name ="submit" > Update </button>
        </div>


        </div>
    </div>
</div>
    
    </form>
</body>