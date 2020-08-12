<?php

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css" />

</head>
<body>
<div class="container">
    <section id="content">
        <form method="POST" action="AdminLogin.php">
            <h1>Manager Login</h1>
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


            <div>
                <input type="Email" name="Email" placeholder="Email" required="" id="Email" />
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input type="submit" value="Log in" name="submit"/>
                
               
            </div>
        </form><!-- form -->
        




    </section><!-- content -->

</div><!-- container -->
</body>
</html>

