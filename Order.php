<!DOCTYPE html>
<html>
<head>
    <title>Add New Customer</title>
    

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



$sql1 = "SELECT Item_No,Name_of_Item,Price FROM `MENU` WHERE Availability = '1'  ";

$result1 = mysqli_query($conn, $sql1);
$sql2 = "SELECT Item_No,Name_of_Item,Price FROM `MENU` WHERE Availability = '1'  ";

$result2 = mysqli_query($conn, $sql2);
$sql3 = "SELECT Item_No,Name_of_Item,Price FROM `MENU` WHERE Availability = '1'  ";

$result3 = mysqli_query($conn, $sql3);
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Select</title>

</head>
<body>
    <select>
      
      <?php 
        while($row1 = mysqli_fetch_array($result1,MYSQLI_NUM)):;?>
        <option><?php echo $row1[0];?></option>
        
        <?php endwhile;?>
    </select>

    <select>
      
      <?php 
        while($row2 = mysqli_fetch_array($result2,MYSQLI_NUM)):;?>
        <option><?php echo $row2[1];?></option>
        
        <?php endwhile;?>
    </select>

    <select>
      
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>

    </select>


</body>
</html>




   <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>