<!DOCTYPE html>
<html>
<head>
    <title>ADMIN FAQ PAGE</title>
    <link rel="stylesheet" href="stylesss/style2.css">
    <link rel="stylesheet" href="stylesss/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			

    <script>
        
        function delete_dataa(id)
		{
			if(confirm('Are you sure to delete the record ?'))
			{
				window.location.href = 'DeleteFAQ.php?id='+id;
			}
		}

        function editRecord(id) 
        {
            window.location ='EditFAQ.php?id=' + id;
        }

        document.write(Date());
		alert("ADMIN FAQ page Loaded!");
     
    </script>
	

</head>

<body>
    
<div class="background1">
    <h1><b>The Book Palace</b></h1><br>
</div>
<hr class="newhr"><br><br>

<div class="productData" id="tbl">
    <table border="5" width="100%">
        <tr>
            <th><b>Customer Name</b></th>
            <th><b>Adress</b></th>
            <th><b>Description</b></th>
            <th><b>E-mail</b></th>
            <th><b>Edit</b></th>
            <th><b>Delete</b></th>
        </tr>

        <?php
        require 'config.php';
        $sql = "SELECT * FROM faqq";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                $id = $row["fid"];
         
                echo "<tr>";

                echo "<td style='text-align:left'>" . $row["name"] . "</td>";
                echo "<td style='text-align:left'>" . $row["address"] . "</td>";

                echo "<td style='text-align:left'><font color='red'> *</font>" . $row["description"] . "</td>";
                echo "<td style='text-align:left'>" . $row["email"] . "</td>";

                //echo "<td><center><input type='button' value='Edit' class='row'><a href='EditFAQ.php?id=$id'></a></center></td>";
                echo"<td style = 'text-align:center'><center><input type='submit' value='Edit' onclick='editRecord($id)'></center></td>";

                echo "<td><input type='submit' value='Delete' onclick='delete_dataa($id)'></td>";

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
