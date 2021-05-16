<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$link = mysqli_connect("localhost", "root", "", "library_management");




// Check connection
if($link === false){
    die("ERROR: Could not connect. " .mysqli_connect_error());
}


$uid=$_POST['user_id']; //this is what we get from the form.
$upass=$_POST['user_password'];


if(empty($_POST['user_id']) || empty($_POST['user_password'])   )
{
  echo "<script>alert('You have an empty field.');</script>";

    header("Refresh:0; url=userLogin.html");   // go back to the login page
}

if(isset($_POST['log']))
{
    
    if($uid == NULL)   // if there is no such user like that.
    {
      echo "<script>alert('The ID does not exist');</script>";
      header("Refresh:0; url=userLogin.html");   // go back to the login page
    } 
    
    else if($uid!= "user" || $upass!= "user")
    {
      echo "<script>alert('The password or the username is incorrect');</script>";
      header("Refresh:0; url=userLogin.html");
    }

    else if($uid== "user" && $upass== "user")
    {
      
      header("Refresh:0; url=user_page.html");
    }
    
    else{
      header("Refresh:0; url=userLogin.html");
    }
}