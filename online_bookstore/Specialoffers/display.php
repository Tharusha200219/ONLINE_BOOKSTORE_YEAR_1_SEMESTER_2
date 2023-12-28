<?php
include 'connect.php';
?>
<script>
    function checkdelete()
    {
        return confirm('are you sure to delete this record?');

    }

    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Special offer edit page</title>
    <link rel="stylesheet" type="text/css" href="styles/sp.css">
    <style>
    .btnn{
    padding: 50px 70px;
    background-color:#ffcdcd;
    margin-top: 10%;
  }
  .qw{
    font-size:20px;
  }
    </style>
</head>
<body>
    <div class="container">
        <button class="btnn"><a class="qw" href="user.php">Add NEW OFFER</a></button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Offer ID</th>
                <th scope="col">Offer available book category</th>
                <th scope="col">BUY amount</th>
                <th scope="col">GET amount of free</th>
                <th scope="col">OPERATION</th>
            </tr>
        </thead>

        <tbody>
        <?php
        include 'connect.php';

        $sql = "SELECT * FROM `spo`";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id=$row['offerid'];
                $id=$row['offerid'];
                echo '<tr>
                        <td>'.$row['offerid'].'</td>
                        <td>'.$row['Offerfor'].'</td>
                        <td>'.$row['howmanytobuy'].'</td>
                        <td>'.$row['howmanyget'].'</td>
                        <td>
                            <button class="btw1111"><a href="update.php?updateid='.$id.'">Update </a></button>
                            <button class="btw1111"><a href="delete.php?deleteid='.$id.'" onclick ="return checkdelete()">Delete</a></button>
                        </td> 
                    </tr>';
            }
        }
        
        ?>
        </tbody>
    </table>

    

</body>
</html>
