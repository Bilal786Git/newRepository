<?php
	$email = $_SESSION['email'];
	$row3 = mysqli_query($con, "SELECT * FROM registration WHERE email='$email'");
	$result3 = mysqli_fetch_array($row3);
	$f_name = $result3['fname'];
	$l_name = $result3['lname'];
	$pass1 = $result3['password'];
	$pass2 = $result3['password'];

	if(isset($_POST['update'])){
		$f_name = trim($_POST['f_name']);
		$l_name = trim($_POST['l_name']);
		$email = trim($_POST['email']);
		$mobile = trim($_POST['mobile']);
		$pass1 = trim($_POST['pass1']);
		$pass2 = trim($_POST['pass2']);

		$row = mysqli_query($con, "SELECT * FROM registration WHERE email='$email'");
		$result = mysqli_fetch_array($row);

		/*if($result){
			$msg = "<div style='background: white; color: red; width: 82.7%; margin-left: 55px; padding: 10px 10px 10px 10px; font-weight: bold;'>Email Already Exists Try Another ! </div>";
		}*/
		if($pass1!==$pass2){
			$msg = "<div style='background: white; color: red; width: 82.7%; margin-left: 55px; padding: 10px 10px 10px 10px; font-weight: bold;'>Passwords Didn't Matched ! </div>";
		}
		else {
			//$pass = md5($pass1);
			mysqli_query($con, "UPDATE registration SET email='$email', $fname='$f_name', $lname='$l_name', mobile='$mobile', password='$pass1' WHERE email='$email'");
			$f_name=''; $l_name=''; $mobile=''; $pass1=''; $pass2='';
			$_SESSION['email'] = $email;
			header('location: view_profile.php');
		}
	}

	if(isset($_POST['go_back'])){
		header('location: view_profile.php');
	}
?>