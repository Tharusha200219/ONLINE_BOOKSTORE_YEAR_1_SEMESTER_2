<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $dis = $_POST['discr'];
    $byy = $_POST['buybook'];
    $gee = $_POST['getbook'];

    $sql = "INSERT INTO `spo` (Offerfor, howmanytobuy, howmanyget)
            VALUES ('$dis', '$byy', '$gee')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data inserted successfully";
        header("location:display.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Special offer page form for online bookstore</title>
    <link rel="stylesheet" type="text/css" href="styles/sp.css">
</head>
<body> 
    <h1>Special Offers Input</h1>
    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <label>Discription:</label>
                <input type="text" name="discr" placeholder="Enter your description">
            </div>
    
            <div class="form-group">
                <label>How many to buy:</label>
                <input type="text" name="buybook" placeholder="Enter amount">
            </div>
    
            <div class="form-group">
                <label>How many will you get:</label>
                <input type="text" name="getbook" placeholder="Enter amount">
            </div>
    
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>