<!DOCTYPE html>
<html>
<head>
    <title>Write a Reviews</title>

    <link rel="stylesheet" href="styles/re.css">

    <style>
    .main{
            width:100%;
            background:url(images/q.jpg);
            background-position:center;
            background-size:cover;
            height:100%;
            position: absolute;
        }
    </style>

</head>

<body>
<div class="main">
<div class="box">
<form action=review.php method="POST">

    <label for="name" class="re1">Name</label>
    <br>
    <input type="text" id="name" name="name" class="re13" required>
    <br>
    <label for="rating" class="re1">>Rating</label><br>
    <select id="rating" name="rating" class="re13" required>
    <option value="">-- Select Rating --</option>
    <option value="5">5 - Excellent</option>
    <option value="4">4 - Very Good</option>
    <option value="3">3 - Good</option>
    <option value="2">2 - Fair</option>
    <option value="1">1 - Poor</option>
    </select>
    <br>
    <label for="review" class="re1" >Review:</label><br>
    <textarea id="review" name="review" rows="5" cols="40" class="re11" required></textarea>
    <br>
    <label for="email" class="re1">Email Address:</label><br>
    <input type="email" id="email" name="email" placeholder="example@example.com" class="re13" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
    <input type="submit" name="submitreview" value="Submit" class="re12">
</form>
    </div>
    </div>

<?php
require 'connection.php';

if (isset($_POST['submitreview'])) {


    $name = $_POST["name"];
    $rate = $_POST["rating"];
    $rev= $_POST["review"];
    $mail=$_POST["email"];
    

    $sql = "INSERT INTO reviews (name, rating, review, email) VALUES ('$name', '$rate', '$rev', '$mail')";

    if ($conn->query($sql)) {
        echo "<script> alert('Records added successfully !!!!')</script>";
        header("location:/online_bookstore/user_page/AFTER_LOGIN_user_home_page.php");
    } else {
        echo "<script> alert('ERROR: could not able to execute the query. ')</script>";
        echo $sql;
    }
}
?>

</body>
</html>
