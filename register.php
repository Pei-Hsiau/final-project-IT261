<?php 
// my register form
include('server.php');
include('includes/headers.php');

?>


<h1 class="signin">Register form</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="register" method="post">
<fieldset>
<label>Fist name</label>
<input type="text" name="FirstName" value="<?php if(isset($_POST['FirstName'])) echo $_POST['FirstName']; ?>">
    
<label>Last name</label>
<input type="text" name="LastName" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName']; ?>">
    
<label>Username</label>
<input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">

<label>Email</label>
<input type="text" name="Email" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>">

<label>Password</label>
<input type="password" name="Password_1">

<label>Confirm Password</label>
<input type="password" name="Password_2">


<button type="submit" class="btn" name="reg_user">Register</button>
<button type="button" onclick="window.location.href = '<?php echo 
    htmlspecialchars($_SERVER['PHP_SELF']);?>'" class="btn-1">Reset</button>
<?php 
    include('includes/errors.php'); 
    ?>
</fieldset>
</form>

<p class="text">Already a member? <a href="login.php">sign in</a></p>

<?php 
include('includes/footer.php');
?>