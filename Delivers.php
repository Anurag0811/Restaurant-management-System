<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="FormStyle.css" />
    <style>
        .Error{
            color: red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="form-style-2">
    
    <div class="form-style-2-heading">Enter Details</div>
    
    <form action="Delivers1.php" method="POST">
    
    
    <label for="field2">
        <span>Contact No</span>
        <input type="text" name="ContactNumber" pattern="[7-9]{1}[0-9]{9}" title="Phone number starts with 7-9 and remaing 9 digits with 0-9">
    </label>

    

    <label for="field1">
        <span>Bill Number</span>
        <input type="text" class="input-field" name="BN" required value=""/>
    </label>
  
    <?php
        if(@$_GET['Invalid']==true)
        {
    ?>
        <div class="Error">
            <?php echo $_GET['Invalid']?>
         </div>
    <?php
        }
     ?>

    

    





    
    

    <label><span> </span><input type="submit" value="Delivered" /></label>
    </form>
    </div>

</body>
</html>