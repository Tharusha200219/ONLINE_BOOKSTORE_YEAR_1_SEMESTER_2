<!DOCTYPE html>
<html>
<head>
    <title>Add Book Details</title>
    <link rel="stylesheet" href="admin_style/add_book.css">

</head>

<body>
<div class="home_a">
        <a href="Addbooks.php">Back</a> 
    </div>


<hr class="newhr">



        <?php
            require 'config.php';
            $bookId = $_GET['id'];
            $sql = "SELECT * FROM addbook WHERE book_id = $bookId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {
                while ($row = $result->fetch_assoc()) 
                {
                    $imagePath = $row["image_path"];
                    $bookName = $row["book_name"];
                    $authorName = $row["author_name"];
                    $description = $row["description"];
                    $price = $row["price"];

                }
            }
        ?>

        <?php
        require 'config.php';

        if (isset($_POST['submit'])) {
            $bookId = $_POST["bookId"];
            $bname = $_POST["bookname"];
            $aname = $_POST["authorname"];
            $desc = $_POST["description"];
            $price = $_POST["price"];

            $file = $_FILES['fileFieldName'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileError = $file['error'];

            $oldImage = $_POST["oldImage"];

            // Check if a file was uploaded successfully
            if ($fileError === 0) {
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($fileName);
                if (move_uploaded_file($fileTmpName, $target_file)) {
                    echo "The file " . basename($fileName) . " is uploaded.";
                    // Delete old image
                    if ($oldImage !== 'uploads/placeholder.jpg' && file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                } else {
                    echo "Error while uploading your file.";
                }
            }

            $sql = "UPDATE addbook SET book_name = '$bname', author_name = '$aname', description = '$desc', price = '$price'";
            if ($fileName) {
                $sql .= ", image_path = '$target_file'";
            }
            $sql .= " WHERE book_id = $bookId";

            if ($conn->query($sql)) {
                echo "<script> alert('Records updated successfully !!!!')</script>";
                header("location:Addbooks.php?id=$bookId");
            } else {
                echo "<script> alert('ERROR: could not able to execute the query.')</script>";
                echo $sql;
            }
        }
        ?>

        <div class="container_q">
            <form  method="post" enctype="multipart/form-data">               
            <div class="row">
                            <div class="col-25">
                                <label class="label_a" for="bookname">Select Image</label>
                            </div>
                            <div class="col-75">
                                <input class="input_a" type="file" name="fileFieldName" id="fileToUpload">
                                <input class="input_a" type="hidden" name="oldImage" value="<?php echo $imagePath; ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label class="label_a"  for="bookname">Book Name</label>
                            </div>
                            <div class="col-75">
                                <input class="input_a" type="text" id="bookname" name="bookname" value="<?php echo $bookName; ?>" required>
                                <input class="input_a" type="hidden" name="bookId" value="<?php echo $bookId; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label class="label_a"  for="authorname">Author Name</label>
                            </div>
                            <div class="col-75">
                                <input class="input_a" type="text" id="authorname" name="authorname" value="<?php echo $authorName; ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label class="label_a"  for="description">Book description</label>
                            </div>
                            <div class="col-75">
                                <input class="input_a" type="text" id="description" rows="6" name="description" value="<?php echo $description; ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label class="label_a"  for="price">Price</label>
                            </div>
                            <div class="col-75">
                                <input class="input_a" type="text" id="price" name="price" value="<?php echo $price; ?>" required>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <input class="input_a" type="submit" name="submit" value="Update">
                        </div>      
                    
                
                
                </form>
            </div>








</body>
</html>
