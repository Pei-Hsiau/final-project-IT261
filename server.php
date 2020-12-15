<?php
//server page

session_start();
include('config.php');

//initial the varaibles

$FirstName = '';
$LastName = '';
$Email = '';
$UserName = '';
$errors = array();
$success = 'You are now logged in.';

//Connect to the database

$db =  mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// register the user

if(isset($_POST['reg_user'])){

$FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
$LastName = mysqli_real_escape_string($db, $_POST['LastName']);
$UserName = mysqli_real_escape_string($db, $_POST['UserName']);
$Email = mysqli_real_escape_string($db, $_POST['Email']);
$Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
$Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);

//The array push function will be able to extract the error that we will be reffering to

if(empty($FirstName)){
    array_push($errors,'First name is required');
}
if(empty($LastName)){
    array_push($errors,'Last name is required');

}
if(empty($UserName)){
    array_push($errors,'User name is required');
}

if(empty($Email)){
    array_push($errors,'Email is required');
}
if(empty($Password_1)){
    array_push($errors,'Password is required');
}

if($Password_1 != $Password_2){
    array_push($errors,'Passwords do not match');
}



//check to see if there's a username or email that I would like to use

$user_check_query = " SELECT * FROM User WHERE UserName='$UserName' OR Email = '$Email' LIMIT 1";

$result = mysqli_query($db,$user_check_query);

$user = mysqli_fetch_assoc($result);

if($user){
    if($user['UserName']== $UserName){
        array_push($errors,'Username already existed');
    }

    if($user['Email']== $Email){
        array_push($errors,'Email already existed');
    }



}//end if user

if(count($errors) == 0){

    $Password = md5($Password_1);

    $query = "INSERT INTO User (FirstName, LastName, Email, UserName, Password) VALUES ('$FirstName', 
    '$LastName', '$Email','$UserName', '$Password')";

    mysqli_query($db, $query);

    $_SESSION['UserName'] = $UserName;
    $_SESSION['success'] = $success;


    header('Location: login.php');
}//end count

// We will retirn to the server.php page to enter the login information

}//isset

if(isset($_POST['login_user'])){
    
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password = mysqli_real_escape_string($db, 
    $_POST['Password']);

    if(empty($UserName)){
        array_push($errors,'Username is required');
    }

    if(empty($Password)){
        array_push($errors,'Password is required');
    }
    
    if(count($errors) == 0){

    $Password = md5($Password);
        
    $query = " SELECT  * FROM User WHERE username='$UserName' AND password = '$Password' ";
    $results = mysqli_query($db,$query);
    
    if(mysqli_num_rows($results) == 1 ){
        
    $_SESSION['UserName'] = $UserName;
    $_SESSION['success'] = $success;


    header('Location: index.php');
        
    }else{
        array_push($errors,'Wrong username/password combination');
    }

}//close count



}//close isset



?>