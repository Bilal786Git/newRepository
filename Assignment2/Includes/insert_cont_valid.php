<?php
	$email = $_SESSION['email'];
	
	if (isset($_POST['insert'])) {
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_mobile = $_POST['c_mobile'];
		$c_place = $_POST['c_place'];
		
		$row = mysqli_query($con, "SELECT * FROM contact_book WHERE cmobile='$c_mobile' AND email='$email'");
		$result = mysqli_fetch_array($row);
		$cname = $result['cname'];
		$cemail = $result['cemail'];


		if($result){
			$msg = "<div style='background: white; color: red; width: 82.7%; margin-left: 55px; padding: 10px 10px 10px 10px; font-weight: bold;'>Contact Already Exists Against <b style='color: green;'>'$cname'</b> with Email <b style='color: green;'>'$cemail'</b> ! </div>";
		}
		else {
			mysqli_query($con, "INSERT INTO contact_book(email,cname,cemail,cmobile,cplace)
			VALUES('$email','$c_name','$c_email','$c_mobile','$c_place')");
			$c_name=''; $c_email=''; $c_mobile=''; $c_place='';
			$msg = "<div style='background: white; color: green; width: 82.7%; margin-left: 55px; padding: 10px 10px 10px 10px; font-weight: bold;'>Contact is Inserted Successfully ! </div>";
		}
	}
?>