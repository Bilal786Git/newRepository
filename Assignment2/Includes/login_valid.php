<?php
	if (isset($_POST['login'])) {

		$email = $_POST['email'];
		$pass = $_POST['pass1'];
		//$pass1 = md5($pass);

		$row = mysqli_query($con, "SELECT * FROM registration WHERE email='$email'");
		$result = mysqli_fetch_array($row);
		$passw = $result['password'];

		if($pass!==$passw){
			$msg = "<div style='background: white; color: red; width: 82.7%; margin-left: 55px; padding: 10px 10px 10px 10px; font-weight: bold;'>Wrong Email or Password ! </div>";
		}
		else {
			$_SESSION['email'] = $email;
			header('location: profile.php');
		}
	}
?>