<?php
    session_start();
?>
<!DOCTYPE html>

<html>
      <head>
         <meta charset="UTF-8">
         <title>Socmed</title>
         <link href="./res/style.css" rel="stylesheet" type="text/css"/>
      </head>
    <body>
        <div class="navbar">
            <a href="./index.php">Home</a>
            <a href="./gallery.php">Gallery</a>
            <a href="./about.php">About</a>
            <a href="./profile.php">Profile</a>
<?php 
    if(isset($_SESSION['uid'])){
?>      
            <a href="./profile.php">
<?php
    echo $_SESSION['fname']." ".$_SESSION['lname'];
?>
            </a>
            <a href="./models/logout_user.php">Logout</a>
                
<?php   
    }
    else{
       
?>
            <a href="./login.php">Login</a>
            <a href="./registration.php">Register</a>
    <?php }       

?>
                    </div>