
<?php
session_start();
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style >

      .GFG { 
            background-color: black; 
            border: 1px solid black; 
            color: white; 
            padding: 5px 10px; 
            text-align: center; 
            display: inline-block; 
            font-size: 20px; 
            margin-left: 46%;
            margin-top: 30%;
            cursor: pointer; 
        } 
      .hompagetext
{
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%,-50%);
}

.hompagetext h1{
  color: #fff;
  font-size: 40px;
}
    </style>
</head>
<body>


<div class = "hompagetext">
    <h1>Delivery Agent Assigned</h1>
  </div>

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
<?php
}
else
{
  header("location:ALogin.php");
}
?>
 