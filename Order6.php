
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
session_start();

$CB = $_POST['CB'];
$MB = $_POST['MB'];
$KP = $_POST['KP'];
$Roti = $_POST['Roti'];
$Rice = $_POST['Rice'];
$Mach = $_POST['Mach'];
$DaabChingri = $_POST['DaabChingri'];
$Modes = $_POST['Mode'];


$total = 0;

$Quantity =  array($CB,$MB,$KP,$Roti,$Rice,$Mach,$DaabChingri);


if($Quantity[0]>0)
{
	$total = $total + $Quantity[0]*150;
}

if($Quantity[1]>0)
{
	$total = $total + $Quantity[1]*200;
}

if($Quantity[2]>0)
{
	$total = $total + $Quantity[2]*150;
}

if($Quantity[3]>0)
{
	$total = $total + $Quantity[3] * 5;
}

if($Quantity[4]>0)
{
	$total = $total + $Quantity[4] * 60;

}

if($Quantity[5]>0)
{
	$total = $total + $Quantity[5] * 250;

}

if($Quantity[6]>0)
{
	$total = $total + $Quantity[6] * 400;

}


$currentDate = date('Y-m-d');

$currentTime = date("H:i:s", strtotime("+4 hours 30 mins"));
$UserEmail = $_SESSION['user'];

$sql = "SELECT Premium_Mem FROM CUSTOMER WHERE Email = '$UserEmail'";

$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
        if($row[0] == 1)
        {
        	$total =  $total - $total*0.1;
        }
}





$sql = "INSERT INTO BILL (Billing_Date,Billing_Time,Amount,Modes,mgr_ssnB, Customer_EmailB,Assigned,Delivered) VALUES('$currentDate','$currentTime',$total,'$Modes',101,'$UserEmail',1,1)";



if ($conn->query($sql) === TRUE) {
	$BillNo = $conn->insert_id;
	$sql1  = "INSERT CONTAINS VALUES";

	for ($i=0,$j=401; $i < 7; $i++,$j++) 
	{ 
		if($Quantity[$i]>0)
		{
		$sql1  .="($j,$BillNo,$Quantity[$i]),";
		}

	}
	$sql1 = rtrim($sql1,",");



	if ($conn->query($sql1) === TRUE) {
		$url = "Order7.php?val=" .$BillNo."&total=".$total;
    			header('location:' .$url);
	} else {
	    echo "Error: " . $sql1 . "<br>" . $conn->error;
	}

    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	

$conn->close();
?> 