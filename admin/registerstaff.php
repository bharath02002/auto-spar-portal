<?php
session_start();
include('include/config.php');
if(isset($_POST['staffregister'])) {
	$name=$_POST['fullname'];
	$email=$_POST['emailid'];
	$address=$_POST['address'];
	$contactno=$_POST['contactno'];
	$confirmpassword=md5($_POST['confirmpassword']);
	$uname=$_SESSION['alogin'];
	$id=$_SESSION['id'];
	$quer=mysqli_query($con,"select * from admin where username='$uname' and id=$id ");
	$row=mysqli_fetch_array($quer);
	if($quer) {
		if($row['password'] == $confirmpassword) {
			$quer=mysqli_query($con,"select * from staffdetails where email='$email' ");
			$row=mysqli_fetch_array($quer);
			if($row['email'] == $email){
				echo "<script>alert('Not register Staff already exist');</script>";
					header('locatio:manage-staff.php');
			} else {
				$query=mysqli_query($con,"insert into staffdetails values('','$name','$email','$address','$contactno',default)");
				if($query) {
					echo "<script>alert('You are successfully register');</script>";
					header('location:manage-staff.php');
				}
				else {
					echo "<script>alert('Not register something went worng');</script>";
					header('locatio:manage-staff.php');
				}
			}
		}
		else {
			echo "<script>alert('Admin password wrong');</script>";
			header('locatio:manage-staff.php');
		}
	}	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Auto Spare Portal | Staff Register</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
	<body>
	<a href='manage-staff.php'><h1> Back</h1> </a> 
	</body>
</html>
