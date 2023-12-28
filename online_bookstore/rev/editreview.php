<!DOCTYPE html>
<html>
<head>
    <title>Review Details</title>
    <link rel="stylesheet" href="styles/re.css">


    <style>
    .main{
            width:100%;
            background:url(images/2.jpg);
            background-position:center;
            background-size:cover;
            height:100%;
            position: absolute;
            
        }
        .box{
            margin-top:30px;
        }
    </style>
</head>

<body>


        <?php
            require 'connection.php';
            $id = $_GET['id'];
            
            $sql = "SELECT * FROM reviews WHERE rid = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {
                while ($row = $result->fetch_assoc()) 
                {
                    $name = $row["name"];
                    $rate = $row["rating"];
                    $rev = $row["review"];
                    $mail = $row["email"]; 

                }
            }
            
        ?>
<div class="main">
<div class="box">
<div class="container">
    <form action="update.php" method="post" >               
    <div class="row">
    <br><br><br><br><br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="customername" class="re1">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="re13" id="name" name="name" value="<?php echo $name; ?>" required>
                        <input type="hidden" class="re13" name="id" value="<?php echo $id; ?>">

                    </div>
                    <br><br>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="customerrating" class="re1">Rate</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="re13" id="rating" name="rating" value="<?php echo $rate; ?>" required>
                        <input type="hidden" class="re13" name="id" value="<?php echo $id; ?>">

                    </div>
                </div>
                <br><br>
            

                <div class="row">
                    <div class="col-25">
                        <label for="review"  class="re1">Review</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="review" class="re13" name="review" value="<?php echo $rev; ?>" required>
                    </div>
                </div><br><br>


                <div class="row">
                    <div class="col-25">
                        <label for="email" class="re1">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" class="re13" rows="6" name="email" value="<?php echo $mail; ?>" required>
                    </div>
                </div><br><br>


                <br>
                <div class="row">
                    <input type="submit" value="Update" class="re12">
                </div>      
            
        
        
        </form>
    </div>
    </div>
    </div>
    







