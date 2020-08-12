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
    <title>Order</title>
    <link rel="stylesheet" type="text/css" href="FormStyle.css" />
</head>
<body>
<div class="form-style-2">
    
    <div class="form-style-2-heading">Select Quantity</div>
    
    <form action="Order6.php" method="POST">
    
    <?php
    $sql = "SELECT * FROM `MENU` WHERE Availability = 1 AND Name_of_Item = 'Chicken Biryani'";
    $result = mysqli_query($conn, $sql);


    if (isset($result->num_rows) && $result->num_rows >0) {
    ?>

	<label for="field4">
		<span>Chicken Biryani(Rs. 150) </span><select name="CB" class="select-field">
    	<option value="0">0</option>
    	<option value="1">1</option>
   		<option value="2">2</option>
    	<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
    </select></label>
    <?php
    }
    ?>

    <?php
    $sql = "SELECT * FROM `MENU` WHERE Availability = 1 AND Name_of_Item = 'Mutton Biryani'";
    $result = mysqli_query($conn, $sql);
    if (isset($result->num_rows) && $result->num_rows >0) {
    ?>

    <label for="field4">
        <span>Mutton Biryani(Rs. 200) </span><select name="MB" class="select-field">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select></label>
    <?php
    }
    ?>


    <?php
    $sql = "SELECT * FROM `MENU` WHERE Availability = 1 AND Name_of_Item = 'Kadai Paneer'";
    $result = mysqli_query($conn, $sql);
    if (isset($result->num_rows) && $result->num_rows >0) {
    ?>
    <label for="field4">
        <span>Kadai Paneer(Rs. 150) </span><select name="KP" class="select-field">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select></label>
    <?php
    }
    ?>

    <?php
    $sql = "SELECT * FROM `MENU` WHERE Availability = 1 AND Name_of_Item = 'Roti'";
    $result = mysqli_query($conn, $sql);
    if (isset($result->num_rows) && $result->num_rows >0) {
    ?>
    <label for="field4">
        <span>Roti(Rs. 5) </span><select name="Roti" class="select-field">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select></label>
    <?php
    }
    ?>



    <?php
    $sql = "SELECT * FROM `MENU` WHERE Availability = 1 AND Name_of_Item = 'Rice'";
    $result = mysqli_query($conn, $sql);
    if (isset($result->num_rows) && $result->num_rows >0) {
    ?>
    <label for="field4">
        <span>Rice(Rs. 60) </span><select name="Rice" class="select-field">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select></label>
    <?php
    }
    ?>


    <?php
    $sql = "SELECT * FROM `MENU` WHERE Availability = 1 AND Name_of_Item = 'Mach'";
    $result = mysqli_query($conn, $sql);
    if (isset($result->num_rows) && $result->num_rows >0) {
    ?>
    <label for="field4">
        <span>Mach(Rs. 250) </span><select name="Mach" class="select-field">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select></label>
    <?php
    }
    ?>


    <?php
    $sql = "SELECT * FROM `MENU` WHERE Availability = 1 AND Name_of_Item = 'Daab Chingri'";
    $result = mysqli_query($conn, $sql);
    if (isset($result->num_rows) && $result->num_rows >0) {
    ?>
    <label for="field4">
        <span>Daab Chingri(Rs. 400) </span><select name="DaabChingri" class="select-field">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select></label>
     <?php
    }
    ?>

    <label for="field4">
        <span>Mode </span><select name="Mode" class="select-field">
        <option value="Online">Online</option>
        <option value="Offline">Offline</option>
        
    </select></label>








    
    

    <label><span> </span><input type="submit" value="Submit" /></label>
    </form>
    </div>

</body>
</html>