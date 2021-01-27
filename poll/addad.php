<?php
session_start();
$captcha = "" ;
include "connection.php"; 
if(isset($_POST['submit'])) {
$name = mysqli_real_escape_string($con, $_POST['name']);
$name3 = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);

$sq = mysqli_query($con, 'SELECT username FROM admin WHERE username="'.$_POST['username'].'"');
$exist = mysqli_num_rows($sq);
	
		if($exist==1){
		$nam="<center><h4><font color='#FF0000'>The username already exist, pick another.</h4></center></font>";
		unset($username);
		include('addadmin.php');
		exit();
		}

$sql2 = mysqli_query($con, 'INSERT INTO admin (username,password,name)
         VALUES("'.$_POST['username'].'","'.$_POST['password'].'","'.$_POST['name'].'")'); 
if (!$sql2) { 
		 die (mysqli_error($con));
		 }
else {
header("location: admin.php");
}
}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"admin.php";
}
?>
