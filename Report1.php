<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    
    <style>
    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin: auto;
  margin-top: 150px;
  

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr{background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2d2f30;
  color: white;
}
  </style>
</head>
<body>

   
<table id="customers">
  <tr>
    <th>Customer_EmailB</th>
    <th>Billing_Date</th>
    <th>Billing_Time</th>
    <th>Amount</th>
    <th>No_of_items</th>
    <th>Modes</th>
    
  </tr> 
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

$DateS = $_POST['DateS'];
$DateE = $_POST['DateE'];


$sql = "SELECT Customer_EmailB, Billing_Date, Billing_Time , Amount, No_of_items,Modes FROM `BILL` WHERE Billing_Date BETWEEN '$DateS'AND '$DateE' GROUP BY(Modes) ORDER BY(Modes) DESC";

$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo "<tr> 
                  <td>".$row[0]."</td>
                  <td>".$row[1]."</td>
                  <td>".$row[2]."</td>
                  <td>".$row[3]."</td>
                  <td>".$row[4]."</td>
                  <td>".$row[5]."</td>

                  
                  
              </tr>";
    
} 
echo "</table";
}
else {
    echo "0 results";
}
$conn->close();
?> 
 </table>


   <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>