<?php
include('config.php'); 
include('includes/header.php');

?>



<div class="wrapper">
<main>
    <h1><?php echo $mainHeadline ;?></h1>


</main>
    
<aside>
    <h3>Question form</h3>
        <?php
include('includes/form.php');

?>
    
</aside>
<?php 
include('includes/footer.php');
?>