<?php
//this is my login page

include('server.php');
include('includes/headers.php');


?>

<h1 class="signin">Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="login">
<fieldset>
    
<label>Username</label>
<input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) 
    echo $_POST['UserName']; ?>">
    
<label>Password</label>
<input type="password" name="Password">
<?php
   include('includes/errors.php');
?>
    
<button type="submit" class="btn" name="login_user">Login</button>
<button type="button" onclick="window.location.href = '<?php echo 
    htmlspecialchars($_SERVER['PHP_SELF']);?>'" class="btn-1">Reset</button>
    
    
</fieldset>    
    
    
</form>
<p class="text">Have not registered? <a href="register.php">Register here</a></p>

<?php 
include('includes/footer.php');
?>