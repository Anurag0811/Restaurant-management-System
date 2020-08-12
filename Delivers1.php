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


$ContactNumber = $_POST['ContactNumber'];
$BN = $_POST['BN'];



$sql = "SELECT BillNo,Delivered FROM BILL where BillNo = $BN";
		$result = mysqli_query($conn, $sql);

		if ($result->num_rows > 0) 
		{
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			if ($row[0] == $BN && $row[1]==1) 
			{	
				$sql1 = "SELECT Customer_EmailB FROM BILL WHERE BillNo = $BN";

				$result1 = mysqli_query($conn, $sql1);
				if ($result1->num_rows > 0) 
				{
    // output data of each row
   				 $row = mysqli_fetch_array($result1, MYSQLI_NUM);
        		
    


	    		$sql = "INSERT DELIVERS VALUES('$ContactNumber','$row[0]','$BN')";
	    		$sql1 = "UPDATE BILL SET Delivered = 0 WHERE BillNo = '$BN' ";
				$result1 = mysqli_query($conn, $sql1);


				if ($conn->query($sql) === TRUE) 
				{
   				echo "Order Delivered";
				} 
				else 
				{
    			echo "Error: " . $sql . "<br>" . $conn->error;
				}
				}

			}
			else{
				header("location:Delivers.php?Invalid=Please Enter Correct BillNo");
			} 

		}
		else 
		{
    	echo "Error in System";
		}	




$conn->close();
?> 