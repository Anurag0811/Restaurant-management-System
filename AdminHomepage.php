
<?php
session_start();
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Homepage</title>
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
      <a href="AdminHomepage.php" class="navbar-brand">Home</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="Report101.html">Report1</a></li>
            <li><a class="dropdown-item" href="Report102.html">Report2</a></li>
            <li><a class="dropdown-item" href="Report103.php">Report3</a></li>
            <li><a class="dropdown-item" href="Report104.php">Report4</a></li>
             <li><a class="dropdown-item" href="Report105.html">Report5</a></li>

            
          </ul>
        </li>

        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage <b class="caret"></b></a>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="AssignDA.php">Assign Delivery Agent</a></li>
            <li><a class="dropdown-item" href="AddDA.html">Add Delivery Agent</a></li>
            <li><a class="dropdown-item" href="Update.html">Update Menu</a></li>
            <li><a class="dropdown-item" href="POrders.html">Orders Delivered</a></li>
            
          </ul>
        </li>

        
        <li>
          <a href="Notification.php">Notification</a>
        </li>
        <li class="active">
          <a href="AdminLogout.php">Logout</a>
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
  header("location:ALogin.php");
}
?>
 