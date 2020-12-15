<?php
session_start();

if(isset($_POST['UserName'])){
    $_SESSION['msg'] = 'You must log in first.';
    
    header('Location: login.php');

}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    
    header('Location: login.php');


}


include('config.php'); 
include('includes/header.php');

?>
<p class="logout"> Hi,  welcome to the home page</p>
<?php
if(isset($_SESSION['success'])) :?>

<div class=" error success">
<p class="logout">
<?php
    echo $_SESSION['success'];
    unset($_SESSION['success']);

?>

</p>
</div>
<?php endif ?>
<div class=" error success">
<?php
    if(isset($_SESSION['UserName'])) : ?>
<p class="logout">Welcome,
<?php  echo $_SESSION['UserName']; ?>
</p>
<br>
<p class="logout"><a href="index.php?logout='1' ">Logout </a></p>
</div>
<?php endif ?>
<div class="wrapper">
    <h1 class="<?php echo $center;?>"><?php echo $mainHeadline ;?></h1>
<!--    <img src="img/photo1.jpg" alt="photo">-->
    <?php 
    
    echo randImages($photos); 
    
    ?>
    
    <blockquote>
    "You've gotta dance like there's nobody watching,
        Love like you'll never be hurt,
        Sing like there's nobody listening,
        And live like it's heaven on earth."
    
    </blockquote>
    

<?php 
include('includes/footer.php');
?>