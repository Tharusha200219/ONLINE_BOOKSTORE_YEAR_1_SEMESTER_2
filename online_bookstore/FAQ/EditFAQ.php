<!DOCTYPE html>
<html>
<head>
    <title>Edit FAQ Details</title>
    <link rel="stylesheet" href="stylesss/style2.css">
    <link rel="stylesheet" href="stylesss/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="background1">
    <h1><b>The Book Palace</b></h1><br>
</div>
<hr class="newhr">

        <?php
            require 'config.php';
            $id = $_GET['id'];
            
            $sql = "SELECT * FROM faqq WHERE fid = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {
                while ($row = $result->fetch_assoc()) 

                {
                    $name = $row["name"];
                    $address = $row["address"];
                    $desc = $row["description"];
                    $email = $row["email"];
                   

                }
            }
            
        ?>

<div class="container">
    <form action="UpdateFAQ.php" method="post" >               
    <div class="row">
                   
                <div class="row">
                    <div class="col-25">
                        <label for="customername">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                    </div>
                </div>
               

                <div class="row">
                    <div class="col-25">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="address" name="address" value="<?php echo $address; ?>" required>
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="description">Description</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="description" rows="6" name="description" value="<?php echo $desc; ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="price">E-mail</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
                </div>

                <br>
                <div class="row">
                    <input type="submit" value="Update">
                </div>      
            
        
        
         </form>
    </div>





   

<hr class="newhr">
<footer>
    <h3 class="ftralign">Follow Us On</h3>
    <div class="icons">
        <ul>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </ul><br><br><br>
        <br><br><p style="font-style: italic;" class="ftralign">Address: NO - 26/7 Sea Avenue Colombo - 03 <br> hotline - 011 555 7788<br>Mobile - +94 77 885 5698<br>"One of Sri Lanka's largest book collections. Search your favorite book through our online bookstore.Visit us"</p>
    </div>

    <div class="footerlinks"><br>
        <ul>
            <a href="#about"> Help  </a>
            <a href="#about">  About Us </a>
            <a href="FAQpage.html">  FAQ</a>
        </ul>
    </div>
</footer>

</body>
</html>
