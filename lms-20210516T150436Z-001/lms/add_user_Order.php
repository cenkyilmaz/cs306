<?php


$link =mysqli_connect("localhost","root","","library_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$name=$_POST['user_name']; //this is what we get from the form.
$surname=$_POST['user_surname'];
$address=$_POST['user_address'];
$mail=$_POST['user_email'];
$uid=$_POST['user_id'];
$pid=$_POST['product_id'];
$phone=$_POST['phone_no'];
 //this is what we get from the form.


$result= mysqli_query($link,"SELECT * FROM Views WHERE product_id = '$pid' ");
$row2 = mysqli_fetch_array($result);


$res=mysqli_query($link,"INSERT INTO Users (user_id, user_name,user_surname,user_address, user_email, phone_no) VALUES ('$uid', '$name', '$surname', '$address', '$mail','$phone');");
$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}

$res2=mysqli_query($link,"INSERT INTO place_order (order_id, user_id) VALUES ('$oid','$uid');");

$db_result2=mysqli_fetch_array($res2);


if($db_result2!=NULL){
	echo "<script> alert('ERROR');</script>";
}


$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; Order_page.php");
mysqli_close($link);
?>