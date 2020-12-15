<?php

// this will be our config file that we will link to the credentials.php
ob_start(); // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

///Gallery php

$pastry['Tarts_flavor'] = 'tflavors_Flavors we have are Fruit tart $5, Chocolate tart $5, Onion tart $6';
$pastry['Pies_flavor'] = 'pflavors_ we have are Apple pie $13, pecan pie $12, Cinnamon pie $13';
$pastry['Cupcakes_flavor'] = 'cflavors_Flavors we have are vanilla $4, Classis cupcake $5, Mocha cupcake $4';
$pastry['Tortes_flavor'] = 'oflavors_Flavors we have are Brownie Torte $10, Sacher Torte $12, Linze Torte $11';
$pastry['Muffins_flavor'] = 'mflavors_Flavors we have are Blueberry muffin $4, Banana muffin $5, Chai muffin $5';
$pastry['Cheesecakes_flavor'] = 'hflavors_Flavors we have are Spain cheesecake $12, New york cheesecake $14, Basque Cheesecake $11 ';
$pastry['Puddings_flavor'] = 'uflavors_Flavors we have are Spain pudding $6, Chocolate pudding $6, Italian pudding $4 ';
$pastry['Mugcakes_flavor'] = 'gflavors_Flavors we have are Ice cream Mug cake $8, Original Mug cake $8, Swiss Mug cake $10 ';
$pastry['Rolls_flavor'] = 'aflavors_Flavors we have are Macha rolls $14, Black rolls $15, Vanila roll $12 ';
$pastry['Biscuits_flavor'] = 'bflavors_Flavors we have are Potato Biscuits $7, New york biscuits $6, Peanut biscuits $5 ';

$desserts = array('tflavors', 'plavors', 'cflavors','oflavors', 'mflavors', 'hflavors');
$desserts = ['tflavors', 'plavors', 'cflavors','oflavors', 'mflavors', 'hflavors'];

$desserts[0] = 'tflavors';
$desserts[1] = 'pflavors';
$desserts[2] = 'cflavors';
$desserts[3] = 'oflavors';
$desserts[4] = 'mflavors';
$desserts[5] = 'hflavors';
$desserts[6] = 'uflavors';
$desserts[7] = 'gflavors';
$desserts[8] = 'aflavors';
$desserts[9] = 'bflavors';

function randImages2($desserts){

$i = rand(0, count($desserts)-1);
$selectedImages = 'img/'.$desserts[$i].'.jpeg';
echo'<img src = " '.$selectedImages.' " width="310" height="220" class="foods" alt="delicious">';
    
}


switch(THIS_PAGE){
    case 'index.php';
    $title = ' This is Home Page';
    $mainHeadline = ' Make A Wish, the dessert promise land.';
    $center = 'center';
    $body ='home';
        
    break;
        
    case 'about.php';
    $title = 'About our service';
    $mainHeadline = ' Biography';
    $center = 'center';
    $body ='about inner';
        
    break;
        
        
    case 'staffs.php';
    $title = 'Our Staffs';
    $mainHeadline = 'Staff List';
    $center = 'center';
    $body ='staffs inner';
        
    break;
        
        
    case 'daily.php';
    $title = 'Daily Offer';
    $mainHeadline = 'Apartment Coffee';
    $center = 'center';
     $body ='daily inner';
        
    break;
        
        
    case 'menu.php';
    $title = 'menu';
    $mainHeadline = 'Dessert Apartment Special';
    $center = 'center';
    $body ='menu inner';
        
    break;
        
        
    case 'contact.php';
    $title = ' Contact';
    $mainHeadline = 'Contact us Page';
    $center = 'center';
    $body ='contact inner';
        
    break;
        
        
    case 'thx.php';
    $title = ' Thank you page ';
    $mainHeadline = 'Thank you for filling out our form!';
    $center = 'center';
    $body ='thx inner';
        
    break;
    
    
}

$nav['index.php'] = 'Home'; 
$nav['about.php'] = 'About'; 
$nav['staffs.php'] = 'Staffs'; 
$nav['daily.php'] = 'Daily'; 
$nav['menu.php'] = 'Menu'; 
$nav['contact.php'] = 'Contact'; 

function makeLinks($nav){
    $myReturn ='';
     foreach($nav as $key => $value){
         
    if(THIS_PAGE == $key){
        
        $myReturn .= '<li><a href="  '.$key. ' " class="active">'.$value.'</a></li>';
    }else{
        
        $myReturn .= '<li><a href="  '.$key. ' ">'.$value.'</a></li>';
        
    }//end else
         
         
         
     
     
     }// end foreach
    
    
    //always remeber to return $myReturn
    
    return $myReturn;
    
}//end function


$photos = array('photo1', 'photo2', 'photo3','photo4', 'photo5');
$photos = ['photo1', 'photo2', 'photo3','photo4', 'photo5'];

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

function randImages($photos){

$i = rand(0, count($photos)-1);
$selectedImages = 'img/'.$photos[$i].'.jpg';
echo'<img src = " '.$selectedImages.' " width="600" height="400" class="image" alt="photo">';

    
}//end randImages function



//form php

$firstName ='';
$lastName ='';
$email = '';
$tel = '';
$gender = '';
$favorite = '';
$comments='';
$privacy='';

$firstNameErr ='';
$lastNameErr ='';
$emailErr = '';
$telErr = '';
$genderErr = '';
$favoriteErr = '';
$commentsErr='';
$privacyErr ='';

  if($_SERVER['REQUEST_METHOD']=='POST'){
        
        //logic: we need to declare our errors, i.e. if a field is empty, do something; more or less, we are going to declare a whole bunch of if statements and afterwards, if all the statements are true, and woohoo
       // if my name is empty, we will have created a variable called name $nameErr 
      
      
        if(empty($_POST['firstName'])){
            
            $firstNameErr ='Please fill out your first name';
            
        }else{
            $firstName = $_POST['firstName'];
        }
      
      if(empty($_POST['lastName'])){
            
            $lastNameErr ='Please fill out your last name';
            
        }else{
            $lastName = $_POST['lastName'];
        }
      
        
         if(empty($_POST['email'])){
            $emailErr ='Please fill out your email';
            
        }else{
            $email = $_POST['email'];
        }
      
        
         if(empty($_POST['gender'])){
            $genderErr ='Please confirm your gender';
            
        }else{
            $gender = $_POST['gender'];
        }
      
      //Logic: if gender=male, then male is checked
      if($gender== 'male'){
          $male = 'checked';
          
      }elseif($gender == 'female'){
          $female = 'checked';
      }else{
          $none = 'checked';
      } 
      
         if(empty($_POST['favorite'])){
            $favoriteErr ='Please check at least one of your favorite desserts';
            
        }else{
            $favorite = $_POST['favorite'];
        }
      
      if(empty($_POST['comments'])){
            $commentsErr ='Please fill the comment block';
            
        }else{
            $comments = $_POST['comments'];
        }
      
      
        if(empty($_POST['privacy'])){
           $privacyErr ='Please check to agree with our privacy terms';
            
        }else{
            $privacy = $_POST['privacy']; 
        }
    if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Your phone number please!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Invalid format!';
} else{
$tel = $_POST['tel'];
}
}
   
      
        if(isset($_POST['firstName'],
           $_POST['lastName'],
          $_POST['email'],
          $_POST['gender'],
          $_POST['favorite'],
          $_POST['comments'],
          $_POST['privacy'])){
              
            $to='pearlhsiau21@gmail.com';
            $subject = 'Test Email' .date('m/d/y');
            $body = ''.$firstName.' has completed the form'.PHP_EOL.'';
            $body .= 'Your phone number: '.$tel.' '.PHP_EOL.'';
            $body .= 'Your favorite dessersts: '.myfavorite().' '.PHP_EOL.'';
            $body .= 'And we will send you an email to confirm: '.$email.''.PHP_EOL.'';
            $body .= 'Gender: '.$gender.''.PHP_EOL.'';
            $body .= 'comments: '.$comments.'';
              
            $headers = array(
            'From' =>'no-replypearlhsiau21@gmail.com',
            'Reply-to' =>''.$email.'');
              
              mail($to, $subject, $body);
            header('Location: thx.php');
              
          } //end isset
      
  }// close if $_SERVER

//implode function

function myFavorite(){
    
         $myReturn = '';
    
    if (!empty($_POST['favorite'])){
        
   $myReturn = implode(',' , $_POST['favorite']);
        
        
    
    }//end if 
    
    return $myReturn;
    
}//end function


/* if we are on the home page, than the title will be this.....
if we are on the other page, the title will be something else.

*/



switch(THIS_PAGE){
    case 'index.php':
        $title = 'Home';
        $body_class = 'home';
        break;
        
    
    case 'daily.php':
        $title = 'Coffee Specials';
        $body_class = 'coffee inner';
        break;
           
}


if(isset($_GET['today'])){
     $today = $_GET['today'];
}else{
    $today = date('l');
}
//echo date('l');

switch($today){
    case 'Friday' : 
    $coffee = 'Friday is Americano Day.';
    $pic = 'americano.jpg';
    $alt = 'Americano';
    $content ='Caffè Americano (also known as Americano or American; Italian pronunciation: [kafˈfɛ ameriˈkaːno]; Spanish: café americano, literally American coffee) is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added. The name is also spelled with varying capitalization and use of diacritics: e.g., café americano.';
    $caption = '<p>Photo by <a href="https://unsplash.com/@ladysaturday?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">PTMP</a> on <a href="https://unsplash.com/s/photos/americano?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>';
    $color = '#E9BCA8';
    break;
        
    case 'Saturday' : 
    $coffee = 'Saturday is Cappuccino Day.';
    $pic = 'cappuccino.jpg';
    $alt = 'Cappuccino';
    $content ='A cappuccino (/ˌkæpʊˈtʃiːnoʊ/ (About this soundlisten); Italian pronunciation: [kapputˈtʃiːno]; Italian plural: cappuccini) is an espresso-based coffee drink that originated in Italy, and is traditionally prepared with steamed milk foam (microfoam).A cappuccino (/ˌkæpʊˈtʃiːnoʊ/ (About this soundlisten); Italian pronunciation: [kapputˈtʃiːno]; Italian plural: cappuccini) is an espresso-based coffee drink that originated in Italy, and is traditionally prepared with steamed milk foam (microfoam).';
    $caption='<p>Photo by <a href="https://unsplash.com/@conunaese?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Vanesa conunaese</a> on <a href="https://unsplash.com/s/photos/capuccino?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>';
    $color = '#EBDBC4';
    break;
        
    case 'Sunday' : 
    $coffee = 'Sunday is Irish Coffee Day.';
    $pic = 'irishcoffee.jpg';
    $alt = 'Irish Coffee';
    $content ='This coffee beverage has existed since the 18th century and was praised by Alexandre Dumas in 1852. It is believed to be based on the 17th century drink bavarèisa ("Bavarian"): the key distinction is that in a bicerin the three components are carefully layered in the glass rather than being mixed together.';
    $caption='<p>Photo by <a href="https://unsplash.com/@joyhayman?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Joy Hayman</a> on <a href="https://unsplash.com/s/photos/irish-coffee?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>';
    $color = '#AFA299';
    break;
        
    case 'Monday' : 
    $coffee = 'Monday is Bicerin Day.';
    $pic = 'bicerin.jpg';
    $alt = 'Bicerin';
    $content ='Bicerin (Piedmontese pronunciation: [bitʃeˈriŋ]) is a traditional hot drink native to Turin, Italy, made of espresso, drinking chocolate, and milk served layered in a small glass.
    This coffee beverage has existed since the 18th century and was praised by Alexandre Dumas in 1852. It is believed to be based on the 17th century drink bavarèisa ("Bavarian"): the key distinction is that in a bicerin the three components are carefully layered in the glass rather than being mixed together.';
    $caption='<p>Photo by <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fstories.starbucks.com%2Fstories%2F2017%2Fstarbucks-debuts-two-new-beverages-inspired-by-the-roastery%2F&psig=AOvVaw0TolVn74JGg6rof87wkc2n&ust=1602882010942000&source=images&cd=vfe&ved=0CA0QjhxqFwoTCPiBm56_t-wCFQAAAAAdAAAAABAg">Heidi Peiper</a> on <a href="https://stories.starbucks.com/stories/2017/starbucks-debuts-two-new-beverages-inspired-by-the-roastery/">Starbucks</a></p>';
    $color = '#FD6D44';
    break;
        
    case 'Tuesday' : 
    $coffee = 'Tuesday is Long Black Day.';
    $pic = 'longblack.jpg';
    $alt = 'Long Black';
    $content ='A caffè mocha, also called mocaccino, is a chocolate-flavoured variant of a caffè latte. 
    Other commonly used spellings are mochaccino and also mochachino. The name is derived from the city of Mocha, Yemen, which was one of the centers of early coffee trade';
    $caption='<p>Photo by <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwhitehorsecoffee.com.au%2Fblog%2F2018%2F01%2Flong-black-came-make-well%2F&psig=AOvVaw2VXmxk6VrgPUNPADF5Rk4Q&ust=1602881859903000&source=images&cd=vfe&ved=0CAMQjB1qFwoTCOD1sre-t-wCFQAAAAAdAAAAABADt">White Horse Coffee</a> on <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwhitehorsecoffee.com.au%2Fblog%2F2018%2F01%2Flong-black-came-make-well%2F&psig=AOvVaw2VXmxk6VrgPUNPADF5Rk4Q&ust=1602881859903000&source=images&cd=vfe&ved=0CAMQjB1qFwoTCOD1sre-t-wCFQAAAAAdAAAAABAD">White Horse Coffee</a></p>';
    $color ='#EEC663';
    break;
        
    case 'Wednesday' : 
    $coffee = 'Wednesday is Mochaccino Day.';
    $pic = 'mocaccino.jpg';
    $alt = 'Mochaccino';
    $content ='A caffè mocha, also called mocaccino, is a chocolate-flavoured variant of a caffè latte. 
    Other commonly used spellings are mochaccino and also mochachino. The name is derived from the city of Mocha, Yemen, which was one of the centers of early coffee trade';
    $caption = '<p>Photo by <a href="https://unsplash.com/@whataboutnit?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">nitin pariyar</a> on <a href="https://unsplash.com/s/photos/ristretto?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>';
    $color ='#889D9D';
    break;
        
    case 'Thursday' : 
    $coffee = 'Thursday is Ristretto Day.';
    $pic = 'ristretto.jpg';
    $alt = 'Ristretto';
    $content ='Ristretto is a "short shot" (30 ml from a double basket) of a more highly concentrated espresso coffee. 
    It is made with the same amount of ground coffee, but extracted with a finer grind (also in from 20 to 30 seconds) using half as much water. 
    A normal short shot might look like a Ristretto, but in reality, would only be a weaker, more diluted, shot.
    The opposite of a Ristretto (which means in Italian, "shortened, narrow") is a lungo ("long"), which is a double shot. The French call a ristretto a café serré.';
    $caption = '<p>Photo by <a href="https://unsplash.com/@whataboutnit?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">nitin pariyar</a> on <a href="https://unsplash.com/s/photos/ristretto?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>';
    $color = '#C2EAEE';
    break;
}



// PLEASE REMEMBER - THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE

function myerror($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
echo"Error in file: <b>".$myFile."</b> on line: <b>".$myLine."</b><br />";
echo"Error Message: <b>".$errorMsg."</b><br />";
die();
}else{
        echo "I'm sorry, we have encountered an error. ";
        die();
}
}

    
?>

