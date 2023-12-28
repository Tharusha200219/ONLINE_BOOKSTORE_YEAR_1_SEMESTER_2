<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>qqDocument</title>
    <link rel="stylesheet" href="styles/homea_php.css">
    <link rel="stylesheet" href="styles/footer.css">


    <style>
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
        .book_name{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            position:relative;
            color:#444;
            font-size: 22px;
            padding:5px 0;
            padding-top: 30px;
        }
        .features_a{
            
            width: 100%;
            height: 100%;
            
        }
        .heading_for_new_arrivel{
            position: absolute;
            font-size: 130px;
            font-weight: bold;
            padding-top:50px;
        }
    

    </style>
</head>

<body>
    <div class="top">
        <div class="dropdown">
            <button class="dropbtn"><img class="drop-img" src="images/drop.png"></button>
            <div class="dropdown-content">
            <a href="user_category_information_technology.php">Information Technology</a>
            <a href="user_category_mathematics.php">Mathematics</a>
            <a href="user_category_history.php">History</a>
            <a href="user_category_phycology.php">phycology</a>
            <a href="user_category_novels.php">novels</a>
            </div>
        </div>
        <div class="logo">
            <h3>Book Palace</h3> 
        </div>


        <nav>
        <a href="login_page.html">log in</a>
            <a href="user_home_page.php">Home</a>
            <a href="/online_bookstore/Specialoffers/CustomerFace.php">Offers</a>
            <a href="#">About</a>
            <a href="#">Reviews</a>
            
        </nav>
    </div>
    



    <h1 class="heading_for_new_arrivel">PHYCOLOGY</h1>

    
    <selection class="features_c">
    
        
        <img class="features_a" src="images/psychology.png">
        

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

    

    <div class="container">        
            <div class="box-container">

                <?php
                require 'config.php';

                if (isset($_POST['submit'])) {
                    $bname = $_POST["bookname"];
                    $aname = $_POST["authorname"];
                    $desc = $_POST["description"];
                    $cat = $_POST["catogory"];
                    $price = $_POST["price"];

                    $file = $_FILES['fileFieldName'];
                    $fileName = $file['name'];
                    $fileTmpName = $file['tmp_name'];
                    $fileError = $file['error'];
                }
                ?>
                



                        <?php
                        $sql = "SELECT * FROM addbook WHERE catogory='phycology'";
                        $result = $conn->query($sql);

                            while ($row = $result->fetch_assoc()) 
                            {
                                ?>

                                <div class="box">
                                <?php

                                $imagePath = $row["image_path"];
                                // Display the image
                                echo "<img src='$imagePath' alt='Book Image'>";?>
                                <p class="book_name"><?php echo $row["book_name"];?></p>
                                <p class="book_name"><?php echo "RS:".$row["price"];?></p>
                                <p class="book_name_d"><?php echo $row["description"];?></p>
                                <a href="" onclick="add_to_cart_alert()" class="btn">BUY</a>
                                
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
                        <li><a href="user_home_page.php">Home</a></li>
                        <li><a href="/rev/aboutus.html">About</a></li>
                        <li><a href="/rev/review.php">Review</a></li>
                        <li><a href="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                        <br><br>
                        </ul>
                    </div>
        </div>

    </footer>
    </div>
        
    <script src="js/without_login_add_to_cart_alert.js"></script>
</body>
</html>