<?php
include 'connect.php';
$ccc = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $dis = $_POST['discr'];
    $byy = $_POST['buybook'];
    $gee = $_POST['getbook'];
    $oid = $_POST['oid'];

    $sql = "UPDATE `spo` SET Offerfor='$dis', howmanytobuy=$byy, howmanyget=$gee WHERE offerid='$oid'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Successfully updated')</script>";
        header("location:display.php");
    } else {
        die(mysqli_error($conn));
    }
}
?>


<?php
 $sql = "SELECT * FROM `spo` where offerid='$ccc'";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Special offer page form for online bookstore</title>
    <link rel="stylesheet" type="text/css" href="styles/sp.css">
</head>
<body> 
    <h1>Special Offers Update</h1>
    <div class="container">
        <form method="post" action="">
        <div class="form-group">
                <label>Offer ID:</label>
                <input type="text" value="<?php echo $ccc ; ?>" name="oid" readonly>
            </div>   
            
        <div class="form-group">
                <label>Discription:</label>
                <input type="text" name="discr" value="<?php echo $row['Offerfor'] ?>" >
            </div>
    
            <div class="form-group">
                <label>How many to buy:</label>
                <input type="text" name="buybook" value="<?php echo $row['howmanytobuy'] ?>">
            </div>
    
            <div class="form-group">
                <label>How many will you get:</label>
                <input type="text" name="getbook" value="<?php echo $row['howmanyget'] ?>">
            </div>
    <?php
    }
}

    ?>
            <button type="submit" name="submit">update</button>
        </form>
    </div>
</body>
</html>