<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
    
    <style>

      .GFG { 
            background-color: black; 
            border: 1px solid black; 
            color: white; 
            padding: 5px 10px; 
            text-align: center; 
            display: inline-block; 
            font-size: 20px; 
            margin-left: 46%;
            margin-top: 10%;
            cursor: pointer; 
        } 
        
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
    <th>Customer Name</th>
    <th>Customer Email</th>
    <th>Favourite Dish</th>
    
    
    
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

 $Email = $_POST['Email'];


$sql = "SELECT Name,Email,Name_of_Item FROM BILL,CUSTOMER,MENU,CONTAINS WHERE BillNo = Bill_NoC AND Item_NoC = Item_No AND Customer_EmailB = Email AND Email = '$Email' ORDER BY SUM(Quantity) DESC";

$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo "<tr> 
                  <td>".$row[0]."</td>
                  <td>".$row[1]."</td>
                  <td>".$row[2]."</td>
                 
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

<button class="GFG" 
    onclick="window.location.href = 'AdminHomepage.php';"> 
        Home 
</button>

   <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>