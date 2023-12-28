<!DOCTYPE html>
<html>
<head>
    <title>Edit Books</title>
    <link rel="stylesheet" href="admin_style/add_book.css">
    <link rel="stylesheet" href="admin_style/footer.css">
>
    <style>
    .button {
        background-color: #87CEEB; /* Green */
        border: none;
        color: white;
        padding: 1px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 2px 2%;
        cursor: pointer;
        font-weight: bold;
        border-radius: 10px;
        
        
    }
    .button:hover{
        letter-spacing: 1px;
        
    }

    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;

    }
    </style>

    <script>
        
        function delete_data(id)
        {
            if(confirm('Are you sure to delete the record ?'))
            {
                window.location.href = 'deletebooks.php?id='+id;
            }
        }

    </script>
</head>

<body>

    <div class="home_a">
        <a href="admin_home_page.php">Home</a> 
    </div>



<div class="container_q">
    <form action="Addbooks.php" method="post" enctype="multipart/form-data">

        <div class="row">
            <div class="col-25">
                <label class="label_a" for="bookname">Select Image</label>
            </div>

            <div class="col-75">
                <input class="input_a" type="file" name="fileFieldName" id="fileToUpload">
                <input class="input_a" type="submit" value="Upload Image" name="submit">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label class="label_a"  for="bookname">Book Name</label>
            </div>

            <div class="col-75">
                <input class="input_a" type="text" id="bookname" name="bookname" placeholder="Book Name.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label class="label_a"  for="authorname">Author Name</label>
            </div>
            <div class="col-75">
                <input class="input_a" type="text" id="authorname" name="authorname" placeholder="Author name..." required>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label class="label_a"  for="description">Book description</label>
            </div>
            <div class="col-75">
                <input class="input_a" type="text" id="description" rows="6" name="description" placeholder="Enter book description here.." required>
            </div>
        </div>








        <div class="row">
            <div class="col-25">
                <label class="label_a"  for="catogory">Book catogory</label>
            </div>
            <div class="col-75">
                <input class="input_a" type="text" id="catogory" rows="6" name="catogory" placeholder="Enter book catogory here..">
            </div>
        </div>







        <div class="row">
            <div class="col-25">
                <label class="label_a"  for="price">Price</label>
            </div>
            <div class="col-75">
                <input class="input_a" type="text" id="price" name="price" placeholder="1200.00" required>
            </div>
        </div>

        <br>
        <div class="row">
            <input class="input_a" type="submit" name="submit" value="save">
        </div>
    </form>
</div>

<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $bname = $_POST["bookname"];
    $aname = $_POST["authorname"];
    $desc = $_POST["description"];
    $cat=$_POST["catogory"];
    $price = $_POST["price"];

    $file = $_FILES['fileFieldName'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];

    // Check if a file was uploaded successfully
    if ($fileError === 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($fileName);
        if (move_uploaded_file($fileTmpName, $target_file)) {
            echo "The file " . basename($fileName) . " is uploaded.";
        } else {
            echo "Error while uploading your file.";
        }
    } else {
        echo "File not available";
    }


    


    $sql = "INSERT INTO addbook (image_path, book_name, author_name, description,catogory, price) VALUES ('$target_file', '$bname', '$aname', '$desc', '$cat', '$price')";


    if ($conn->query($sql)) {
        echo "<script> alert('Records added successfully !!!!')</script>";
        header("location:Addbooks.php");
    } else {
        echo "<script> alert('ERROR: could not able to execute the query. ')</script>";
        echo $sql;
    }
}
?>

<div class="productData" id="tbl">
    <table width="100%" class="table_data">
        <tr>
            <th><b>Book Image</b></th>
            <th><b>Book Name</b></th>
            <th><b>Author Name</b></th>
            <th><b>Description</b></th>
            <th><b>catogory</b></th>
            <th><b>Price</b></th>
            <th><b>Edit</b></th>
            <th><b>Delete</b></th>
        </tr>

        <?php
        $sql = "SELECT * FROM addbook";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                $id = $row["book_id"];
                echo "<tr>";

                $imagePath = $row["image_path"];
                // Display the image
                echo "<td><img src='$imagePath' alt='Book Image' style='width: 120px; height: 200px; ;'></td>";

                echo "<td style='text-align:center'>" . $row["book_name"] . "</td>";
                echo "<td style='text-align:center'>" . $row["author_name"] . "</td>";

                echo "<td style='text-align:center'><font color='#87CEEB'> Description <br>  </font>" . $row["description"] . "</td>";
                echo "<td style='text-align:center'>" . $row["catogory"] . "</td>";
                echo "<td style='text-align:center'>Price: " . $row["price"] . "</td>";

                echo "<td><center><button class='button' type='submit'><a href='editbooks.php?id=$id'>Edit</a></button></center></td>";
                echo "<td><center><button class='button' type='submit' onclick='delete_data($id)'>Delete</button></center></td>";
                

                echo "</tr>";
            }
        } 
        else 
        {
            echo "No Results";
        }
        ?>
    </table>
</div>


<footer>
        <div class="footer-content">
            <h3 style='font-weight: bold;'>BOOK PALACE</h3>
            <p>NO - 26/7 Sea Avenue Colombo - 03 <br> hotline - 011 555 7788<br>Mobile - +94 77 885 5698<br>One of Sri Lanka's largets book collection. Serach your favourite book through our online bookstore.</p>

        </div>
        <div class="footer-bottom">
        
                    <div class="footer-menu">
                        <ul class="f-menu">
                        <li><a href="admin_home_page.php">Home</a></li>
                        <li><a href="/rev/aboutus.html">About</a></li>
                        <li><a href="/rev/review.php">Review</a></li>
                        <li><a href="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
                        <br><br>
                        </ul>
                    </div>
        </div>

    </footer>
    <script src="admin_js/addbook.js"></script>

</body>
</html>
