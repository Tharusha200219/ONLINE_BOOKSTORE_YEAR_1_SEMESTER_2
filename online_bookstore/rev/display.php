<html>
    <head>
    <style>
        .av{
            background-color: rgb(255, 255, 255);
            height:400px;
            margin-top:300px;
            border: solid black;
            box-shadow: 0.1px 1px 22px 1px;
            
        }
        .av:hover{
            background-color:rgb(237, 237, 237);
        }
        .back{
            width:100%;
            background-color: rgb(255, 255, 215);
            background-position:center;
 


            
        }

    </style>
    <script>
        
        function delete_dataa(id)
		{
			if(confirm('Are you sure to delete the record ?'))
			{
				window.location.href = 'delete.php?id='+id;
			}
		}

        function editRecord(id) 
        {
            window.location ='editreview.php?id=' + id;
        }
    
    </script>
	</head> 
    <body class="back">

    <div class="productData" id="tbl">
    <table border="2" class="av" width="100%">
        <tr>
            <th><b>Name</b></th>
            <th><b>Rate</b></th>
            <th><b>Review</b></th>
            <th><b>E-mail</b></th>
            
        </tr>

        <?php
        require 'connection.php';
        $sql = "SELECT * FROM reviews";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                $id = $row["rid"];
        
                echo "<tr>";

                echo "<td style='text-align:center'>" . $row["name"] . "</td>";
                echo "<td style='text-align:center'>" . $row["rating"] . "</td>";
                echo "<td style='text-align:center'> by " . $row["review"] . "</td>";
                echo "<td style='text-align:center'><font color='red'> </font>" . $row["email"] . "</td>";
            
                
                
                echo"<td style = 'text-align:center'><center><input type='submit' value='Edit' onclick='editRecord($id)'></center></td>";
                echo "<td><center><button class='btndelReview' type='submit' onclick='delete_dataa($id)'>Delete</button></center></td>";

                

                echo "</tr>";
            }
        } 
        else 
        {
            echo "No Results";
        }
        ?>
        </div>
    </table>
</div>
    </body>
</html>