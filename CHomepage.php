
<?php
session_start();
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style >
      .hompagetext
{
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%,-50%);
}

.hompagetext h1{
  color: #fff;
  font-size: 60px;
}
    </style>
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="CHomepage.php" class="navbar-brand">Home</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Order <b class="caret"></b></a>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="Order5.php">Place Order</a></li>
            <li><a class="dropdown-item" href="PastOrder.php">Past Orders</a></li>
            
          </ul>
        </li>

        
       
        <li class="active">
          <a href="Logout.php">Logout</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<div class = "hompagetext">
    <h1>Apnar Khabar</h1>
  </div>
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
  header("location:CLogin.php");
}
?>
 