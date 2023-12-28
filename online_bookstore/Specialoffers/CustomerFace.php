<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title >Special Offers</title>
    <link rel="stylesheet" type="text/css" href="styles/Coustomerface.css">
    <style>
    .main{
            width:100%;
            background:url(images/qw.jpg);
            background-position:center;
            background-size:cover;
            height:100%;
            position: absolute;
        }
        
    h1{
        text-align: center;
    }
    .AAAAAAAA{
        color: #f90000;
        size: 12px;
        font-size: 50px;
    }
    .coupon {
        border: 5px solid #f60505;
        width: 30%;
        
        max-width:400px;
        
        width: 100%;
        padding: 13px;
    

    }

    .container {
        padding: 2px 16px;
        background-color: #e40a0a;
    }




    </style>
</head>
<body>
<div class="main">
<h1 class="AAAAAAAA">Special Offers<h1>
    
    <!--<table class="table">
        <thead>
            <tr>
                <th scope="col">Offer available book category</th>
                <th scope="col">IF you buy below amount of books</th>
                <th scope="col">You will get below of books free</th>
            </tr>
        </thead>

        <tbody>-->
        <?php
        include 'connect.php';

        $sql = "SELECT * FROM `spo`";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '

                <div class="box">
                    <div class="coupon">
                        
                        <div class="container"style="background-color:pink">
                        <h3>'.$row['Offerfor'].'</h3>
                        </div>
                        
                        <div class="container" style="background-color:white">
                        <p>Buy '.$row['howmanytobuy'].' Books</p> 
                        </div>
                        
                        
                        <div class="container">
                        <p>Get '.$row['howmanyget'].' Books free</p>
                        </div>
                    
                    </div> 
                </div>


                    ';
            }
        }
        
        ?>
    <!-- </tbody>
    </table>-->
    </div>
</body>
</html>
