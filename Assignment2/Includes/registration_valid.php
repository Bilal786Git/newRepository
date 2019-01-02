<?php
	if(isset($_POST['submit'])){
		$f_name = trim($_POST['f_name']);
		$l_name = trim($_POST['l_name']);
		$email = trim($_POST['email']);
		$mobile = trim($_POST['mobile']);
		$pass1 = trim($_POST['pass1']);
		$pass2 = trim($_POST['pass2']);

		$row = mysqli_query($con, "SELECT * FROM registration WHERE email='$email'");
		$result = mysqli_fetch_array($row);

		if($result){
			$msg = "<div style='background: white; color: red; width: 82.7%; margin-left: 55px; padding: 10px 10px 10px 10px; font-weight: bold;'>Email Already Exists Try Another ! </div>";
		}
		else if($pass1!==$pass2){
			$msg = "<div style='background: white; color: red; width: 82.7%; margin-left: 55px; padding: 10px 10px 10px 10px; font-weight: bold;'>Passwords Didn't Matched ! </div>";
		}
		else {
			//$pass = md5($pass1);
			mysqli_query($con, "INSERT INTO registration(email,fname,lname,mobile,password) VALUES('$email','$f_name','$l_name','$mobile','$pass1')");
			$_SESSION['email'] = $email;
			header('location: profile.php');
		}
	}
?>
