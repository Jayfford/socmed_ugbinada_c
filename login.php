<?php
include 'views/header.php';
?>

<form id="loginform" action="models/login_user.php" method="POST">
    <label for="uname">Username or Email</label>
    <input type="text" name="uname" id="uname" placeholder="Username or Email" required>
    
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" placeholder="Password" required>
    
    <div class="keep-signed-in">
        <input type="checkbox" name="keep_signed_in" id="keep_signed_in">
        <label for="keep_signed_in">Keep me signed in</label>
    </div>
    
    <input type="submit" value="Login">
</form>  

<?php
include 'views/footer.php';
?>