<?php
$servername = "localhost";
$username = "Rex";
$password = "";
$dbname = "Restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>



 <!DOCTYPE html>
 <html>
 <head>
 	
 	<title>Table</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dish','Quantity Sold'],
        <?php

        $sql = "SELECT Name_of_Item,sum(Quantity) from CONTAINS, MENU where Item_NoC=Item_No GROUP BY (Item_No) ORDER BY (sum(Quantity)) DESC";
$result = mysqli_query($conn, $sql);
if (isset($result->num_rows) && $result->num_rows >0)
        { 
       		while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        	{
          		echo "['".$row[0]."',".$row[1]."],";
        	}
 		}
        ?> 

        ]);

        var options = {
          chart: {
            title: 'Popularity of dishes',
           
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

 </head>
 <body>
 <div id="columnchart_material" style="width: 800px; height: 500px;"></div>

</body>
 </html> 
 
 

 

 
 