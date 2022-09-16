<?php
session_start();
include("include/config.php");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$confirmpassword=md5($_POST['confirmpassword']);
	$ret=mysqli_query($con,"SELECT * FROM staff WHERE username='$username' and password='$password'");
	$row1=mysqli_fetch_array($ret);
	$num=mysqli_fetch_array($ret);
	if($num>0)
	{
				echo "<script>alert('Not register Staff already exist');</script>";
				echo "<script language='javascript'>document.location='index.php'</script>";
	} 
	else {
		$ret=mysqli_query($con,"SELECT * FROM staffdetails WHERE email='$email'");
		$row=mysqli_fetch_array($ret);
		if($row['email']== $email){
			if($password==$confirmpassword){
				if($row1['username']==$username) {
					echo "<script>alert('Staff already exist');</script>";
						echo "<script language='javascript'>document.location='regiter.php'</script>";
				} else {
					$query=mysqli_query($con,"insert into staff(id,username,password,creationDate) values('','$username','$password',default)");
					if($query) {
						echo "<script>alert('You are successfully register');</script>";
						echo "<script language='javascript'>document.location='index.php'</script>";
					} else {
						echo "<script>alert('Registration went wrong');</script>";
						echo "<script language='javascript'>document.location='regiter.php'</script>";
					}
				}
			} else {
				echo "<script>alert('Entered same password and confirm password');</script>";
				echo "<script language='javascript'>document.location='register.php'</script>";
			}
		} else {
			echo "<script>alert('Entered Email is Wrong\n for more info contact Admin');</script>";
				echo "<script language='javascript'>document.location='register.php'</script>";
		}
	}
}
else {
	echo "<script>alert('Button error');</script>";
				echo "<script language='javascript'>document.location='register.php'</script>";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Staff Register</title>
</head>

<body>
	
</body>
</html>