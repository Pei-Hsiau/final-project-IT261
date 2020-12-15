<?php

//people view
include('config.php');
include('includes/header.php');

if(isset($_GET['id'])){
    
    $id = (int)$_GET['id'];
}

else{
    header('Location:people.php');
}

$sql = 'SELECT * FROM People WHERE PeopleID = '.$id.' ';

//connect to the database

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
    or die(myerror(__FILE__, __LINE__, mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__, __LINE__, mysqli_error($iConn)));

  
if(mysqli_num_rows($result) > 0){
    
    //show the records
    
    
    while($row = mysqli_fetch_assoc($result)){
        
        $FirstName = stripcslashes($row['FirstName']);
        $LastName = stripcslashes($row['LastName']);
        $BirthDate = stripcslashes($row['BirthDate']);
        $Occupation = stripcslashes($row['Occupation']);
        $Email = stripcslashes($row['Email']);
        $Description = stripcslashes($row['Description']);
        
        $Feedback = '';
    }  
        
    }else{
        
        $Feedback = 'Oops, something wrong.';
    
    }
    



       

?>
<div class="wrapper">
<main>
<h2 class="member">Our Staffs - <?php echo $FirstName; ?> Contact Page</h2>
<?php
    if($Feedback == ''){
        
        echo'<ul class="people">';
        echo'<li><b>First Name:</b> '.$FirstName.'</li>';
        echo'<li><b>Last Name:</b> '.$LastName.'</li>';
        echo'<li><b>Birth Date:</b> '.$BirthDate.'</li>';
        echo'<li><b>Occupation:</b> '.$Occupation.'</li>';
        echo'<li><b>Email:</b> '.$Email.'</li>';
        echo'</ul>';
        echo'<p style= 
        "line-height: 1.5;">'.$Description.'</p>';
        echo'<br/>';
        echo'<p class="staff"><a href="staffs.php" >Back</a></p>';
    
        
    }else{
        
        echo $Feedback;
        
    }//end else
    
    
    ?>

</main>

<aside>
<?php
    if($Feedback == ''){
        echo '<img src= " img/people'.$id.'.jpg " alt=" '.$LastName.'" width="200" height="200" class="manager">';
        
    }else{
        echo $Feedback;
    }
    
    //release the web serevr

@mysqli_free_result($result);

//close the connection

@mysqli_close($iConn);
    
    ?>

</aside>
<?php
    
    include('includes/footer.php');
    
    
?>