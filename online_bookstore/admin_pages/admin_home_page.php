<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>qqDocument</title>
    <link rel="stylesheet" href="admin_style/homea_php.css">
    <link rel="stylesheet" href="admin_style/footer.css">


    <style>
        *{
    margin: 0;
    padding: 0;
}
.top{
    background-color: #ffffff;

}


.logo{
    font-size: 30px;
    position: absolute;
    font-family:Arial, Helvetica, sans-serif;
    margin-left: 160px;
}

.drop-img{
    width: 30px;
}

.dropbtn {
    position: absolute;
    background-color: rgb(75, 192, 255);
    color: white;
    padding: 10px;

    border: none;
}


.dropdown {
    position: relative;
    display: inline-block;
}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}


.dropdown-content a {
    color: black;
    padding: 32px 23px;
    text-decoration: none;
    display: block;
}


.dropdown-content a:hover {background-color: #ddd;}


.dropdown:hover .dropdown-content {display: block;}


.dropdown:hover .dropbtn {background-color: #3e8e41;}



.search {
    width: 400px;
    margin-top: 10px;
    position:absolute;
    display: flex;
    
}

.searchTerm {
    width: 340px;
    border: 2px solid rgb(56, 185, 255);
    border-right: none;
    padding: 5px;
    height: 16px;
    border-radius: 20px 0 0 20px;
    outline: none;
}

.searchButton {
    width: 90px;
    height: 30px;
    font-family: Arial, Helvetica, sans-serif;
    border: 2px solid rgb(56, 185, 255);
    background: rgb(56, 185, 255);
    text-align: center;
    color: #ffffff;
    border-radius: 0 20px 20px 0;
    cursor: pointer;
    font-size: 20px;
    font-size: 14px;
    
}
.searchButton:hover{
    background-color: rgb(75, 192, 255);
    border-color: rgb(56, 185, 255);
}

/*Resize the wrap to see the search bar change!*/
.wrap{
    width: 10%;
    position:relative;
    top: 18%;
    left: 40%;
    transform: translate(-50%, -50%);
}

nav {
	margin-left:1080px;
	position: relative;
	width: 600px;
	height: 50px;
	font-size: 0;
}
nav a {
	line-height: 50px;
	height: 100%;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-align: center;
	color: rgb(0, 0, 0);
	cursor: pointer;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}
nav a:hover{
    color: rgb(56, 185, 255);
}

a:nth-child(1) {
	width: 100px;
}
a:nth-child(2) {
	width: 110px;
}
a:nth-child(3) {
	width: 100px;
}
a:nth-child(4) {
	width: 160px;
}
a:nth-child(5) {
	width: 120px;
}

body {
	font-size: 12px;
	font-family: sans-serif;
	background: #f2f2f2;
}
h1 {
	text-align: center;
	margin: 40px 0 40px;
	text-align: center;
	font-size: 30px;
	color: #ecf0f1;
	text-shadow: 2px 2px 4px #000000;
	font-family: 'Cherry Swash', cursive;
}

p {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: #ecf0f1;
    font-family: 'Cherry Swash',cursive;
    font-size: 16px;
}
/*nevigation end*/




.home{
    display:flex;
    align-items:center;
    justify-content:center;
    background:url(https://images.pexels.com/photos/346286/panorama-miami-florida-water-346286.jpeg?cs=srgb&dl=pexels-pixabay-346286.jpg&fm=jpg)no-repeat;
    width: 100%;
    height: 1%;
    background-position: center;
    background-size: cover;
    padding-top: 6rem;
    padding-bottom:8rem;
}
.motivation_word{
    color: white;
    font-size: 60px;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    text-shadow: 3px 6px 20px black;
}
.motivation_word span{
    color: rgb(56, 185, 255);

}
.motivation_word:hover{
    font-size: 62px;
    color: rgb(56, 185, 255);
    animation-name: example;
    animation-duration: 4s;
    
}
@keyframes example {
    0%   {color: rgb(255, 177, 177);}
    25%  {color: rgb(255, 255, 180);}
    50%  {color: rgb(147, 147, 255);}
    100% {color: rgb(157, 255, 157);}
}

.bttn{
    font-size: 40px;
}
.add_book_a{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 60px;
}
.heading_for_new_arrivel{
    text-align: left;
    margin-left: 30px;
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 40px;
    font-style: normal;
    text-shadow: none;


}
.hr_class_newarrival{
    border: 2px solid black;
}



.container{
    background:#f2f2f2;
    padding:15px 9%;
    padding-bottom: 100px;
}



.container .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20%, 5fr));
    gap:15px;
}

.container .box-container .box{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 5px;
    background: #fff;
    text-align: center;
    padding:30px 20px;
}

.container .box-container .box img{
    height: 200px;
}

.container .box-container .box h3{
    color:#444;
    font-size: 22px;
    padding:10px 0;
}

.price{
    color:#777;
    font-size: 15px;
    position: absolute;
}

.container .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background:#333;
    color:#fff;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}

.container .box-container .box .btn:hover{
    letter-spacing: 1px;
}

.container .box-container .box:hover{
    box-shadow: 0 10px 15px rgba(0,0,0,.3);
    transform: scale(1.03);
}











        
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 90px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 9%;
        cursor: pointer;
        font-weight: bold;
        border-radius: 10px;
        
        
    }
    .button:hover{
        letter-spacing: 1px;
        transform: scale(1.03);
    }
    table {
            border-collapse: collapse;
            width: 100%;
        }

    th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        td:hover {background-color: coral;}

        .book_name_d{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            position:relative;
            color:#444;
            font-size: 9px;
            padding:5px 0;
            padding-top: 30px;
        }

    </style>
</head>

<body>
    <!-- <div class="top">
        <div class="dropdown">
            <button class="dropbtn"><img class="drop-img" src="images/drop.png"></button>
            <div class="dropdown-content">
            <a href="admin_category_information_technology.php">Information Technology</a>
            <a href="admin_category_mathematics.php">Mathematics</a>
            <a href="admin_category_history.php">History</a>
            <a href="admin_category_phycology.php">phycology</a>
            <a href="admin_category_novels.php">novels</a>
            </div>
        </div> -->
        <div class="logo">
            <h3>Book Palace</h3> 
        </div>


        <nav>
            <a href="AdminPage.html">admin</a>
            <a href="admin_home_page.php">Home</a>
            <a href="/Specialoffers/display.php">Offers</a>
            <a href="/rev/aboutus.html">About</a>
            <a href="/rev/review.php">Review</a>
            
        </nav>
    </div>
    


    <selection class="home" id="#home">
        <h3 class="motivation_word">Books are a uniquely portable <span>magic</span><br></h3>
        
    </selection>


    
    <selection class="features">
        
        <h1 class="heading_for_new_arrivel">NEW ARRIVEL</h1>

        <hr class="hr_class_newarrival"><br>
    </selection>


<form method="post">
	<div class="wrap">
		<div class="search">

			<input type="text" name="search" class="searchTerm" placeholder="What are you looking for?">
			<input type="submit" name="submit" class="searchButton">
		</div>
	</div>
</form>



</body>
</html>


<?php

$con = new PDO("mysql:host=localhost;dbname=logininfor",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `addbook` WHERE book_name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br><br><br><br>
		<table class='table_search'>
			<tr>
				<th>BOOK NAME</th>
				<th>DESCRIPTION</th>
			</tr>
			<tr>
				<td><?php echo $row->book_name; ?></td>
				<td><?php echo $row->description;?></td>
                <td><td>
			</tr>

		</table>
        <br><br><br><br><br><br>
<?php 
	}
		
		
		else{
            
			echo "<br><br>";
		}


}



?>
<br><br><br><br><br><br>
    <button class="button"><a href="Addbooks.php">EDIT BOOKS</a></button>

    

    <div class="container">        
            <div class="box-container">

                <?php
                require 'config.php';

                if (isset($_POST['submit'])) {
                    $bname = $_POST["bookname"];
                    $aname = $_POST["authorname"];
                    $desc = $_POST["description"];
                    $price = $_POST["price"];

                    $file = $_FILES['fileFieldName'];
                    $fileName = $file['name'];
                    $fileTmpName = $file['tmp_name'];
                    $fileError = $file['error'];
                }
                ?>
                



                        <?php
                        $sql = "SELECT * FROM addbook";
                        $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) 
                            {
                                ?>

                                <div class="box">
                                <?php

                                $imagePath = $row["image_path"];
                                // Display the image
                                echo "<img src='$imagePath' alt='Book Image'>";?>
                                
                                </div>

                                <?php
                            }
                
                                    if($total!=0){
                                        echo "";
                                    }else{
                                        echo "";
                                    }
                                ?>
    

                    </div>



        </div>
        <div>
    <footer>
        <div class="footer-content">
            <h3 style='font-weight: bold;'>BOOK PALACE</h3>
            

        </div>
        <div class="footer-bottom">
        
                    <div class="footer-menu">
                        <ul class="f-menu">
                        <li><a href="admin_home_page.php">Home</a></li>
                        <li><a href="/rev/aboutus.html">About</a></li>
                        <li><a href="">Review</a></li>
                        <li><a href="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                        <br><br>
                        </ul>
                    </div>
        </div>

    </footer>
    </div>
        

</body>
</html>