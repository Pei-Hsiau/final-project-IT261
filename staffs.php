<?php
    
include('config.php');
include('includes/header.php');

?>
<div class="wrapper">
<main>
<h1><?php echo $mainHeadline ;?></h1>
<?php

$sql = 'SELECT * FROM People';
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
    or die(myerror(__FILE__, __LINE__, mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__, __LINE__, mysqli_error($iConn)));


//do we have more than 0 raws

if(mysqli_num_rows($result) > 0){
    
    //show the records
    
    
    while($row = mysqli_fetch_assoc($result)){
        
        //this array will display the content of your row
        
        echo'<ul class="list">';
        echo'<li class="bold"> For more information: <a href="people-view.php?id=' . $row['PeopleID'] . ' ">' . $row['FirstName'] . ' ' . $row['LastName'] . ' </a></li>';
        echo '<li>Occupation: ' . $row['Occupation'] . '</li>';
        echo '<li>Email: <a href = "mailto: ' . $row['Email'] . '">' . $row['Email'] . '</a></li>';
        echo '</ul>';
    
    }//close while

}else{
        
        echo ' Nobody home!';
    }
    


//release the web serevr

@mysqli_free_result($result);

//close the connection

@mysqli_close($iConn);
    
?>
</main>
<aside>
<h3>General manager (store)</h3>
<img src="img/ge.jpg" alt="General manager" width="250" height="250"class="manager">
<h4>Miranda Morph</h4>
<p class="content-1">Email: MirandaYMorph@gmail.com</p>
<p class="content-1">Duties for the General Manager will include allocating budget resources, formulating policies, coordinating business operations, 
    monitoring and motivating staff, managing operational costs, ensuring good customer service, improving administration processes, 
    engaging with vendors, hiring and training employees, identifying business opportunities, and monitoring financial activities.
</P>
</aside>

<?php

include('includes/footer.php');

?>


