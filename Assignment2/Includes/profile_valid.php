<?php
$mobile=''; $pass='';
	$email = $_SESSION['email'];
	$row1 = mysqli_query($con, "SELECT * FROM registration WHERE email='$email'");
	$result = mysqli_fetch_array($row1);
	$f_name = $result['fname'];
	$l_name = $result['lname'];
	$mobile = $result['mobile'];
	$pass = $result['password'];

	$str1 = str_split($f_name);
	$str2 = str_split($l_name);
	$f_ch = $str1[0];
	$l_ch = $str2[0];

	$row2 = mysqli_query($con, "SELECT * FROM contact_book WHERE email='$email'");
	echo $row_count = mysqli_num_rows($row2);
?>