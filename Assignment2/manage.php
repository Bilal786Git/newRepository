<?php
session_start();
	$f_name=''; $l_name=''; $email=''; $mobile=''; $pass1=''; $pass2=''; $msg='';
	include('Includes/connect.php');
	include('Includes/bootstrap.php');
	include('Includes/profile_valid.php');
	include('Includes/manage_valid.php');

	function session_exist() {
		if($_SESSION['email']==''){
			return true;
		}
		else {
			return false;
		}	
	}
	
	if(session_exist()){
		header('location: index.php');
	}
?>
		<title>Registration Form</title>
		<link type="text/css" rel="stylesheet" href="Styles/registration_style.css" />
		<style type="text/css">
			body {
				background: url('Images/-391823496.jpg') center fixed;
				background-size: 100% 100%;
				height: 600px;
			}
			#headi_row .col-md-8 h1 {
				color: white; text-shadow: 1px 1px 2px white;
			}
			#headi_row .col-md-8 h1 a {
				color: white; text-decoration: none;
			}
			#headi_row .col-md-4 {
				padding-bottom: 15px; padding-top: 05px; font-family: italic; text-align: right; color: white;
			}
			#outer_cont {
				margin-top: -20px; border: 1px solid green; padding: 20px 20px; border-radius: 20px;
				box-shadow: 0 0 10px green; width: 50%;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			@keyframes animation {
				from {opacity: 0; background: white; margin-top: 70px;}
				to {opacity: 1; background: transparent; margin-top: -20px;}
			}
			#outer_cont #heading_row {
				text-align: center; color: white; margin-left: 90px; margin-right: 90px;
				border: 1px solid white; box-shadow: 0 0 4px black; padding-bottom: 8px;
			}
			#outer_cont #heading_row h2 {
				text-shadow: 0 0 5px white;
			}
			@keyframes animation_input {
				from {margin-top: 60px;}
				to {}
			}
			#outer_cont form input {
				border-radius: 0px; border: 1px solid green; height: 40px; font-weight: 600;
				animation-name: animation_input;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			#outer_cont form input:hover {
				border: none; box-shadow: 0 0 3px green;
			}
			#outer_cont form input:active {
				border: none; box-shadow: 0 0 3px green;
			}
			#outer_cont form input:focus {
				border: none; box-shadow: 0 0 3px green;
			}
			#welcom_head #welcom {
				color: cyan; text-shadow: 1px 1px 2px cyan;
			}
			#welcom_head #drop_a {
				color: white; text-decoration: none;
			}
			#welcom_head #short_name {
				color: white; border: 1px solid white; box-shadow: 0 0 10px white;
				font-family: italic; border-radius: 30%; padding: 10px;
			}
			#welcom_head #short_name:hover {
				color: yellow; box-shadow: 0 0 15px white; border: 1px solid yellow;
			}
			#welcom_head #short_name span {
				margin-top: -05spx;
			}
			#welcom_head ul {
				margin-left: 200px; margin-top: -15px;	border-radius: 10px;
				background: white; box-shadow: 0 0 10px green; opacity: 1;
			}
			#welcom_head ul li {
				background: green; border-radius: 10px; font-size: 17px; transition: .5s; border: 1px solid white;
			}
			#welcom_head ul li:hover {
				background: white; border-radius: 10px; border: 1px solid green;
			}
			#welcom_head ul li a {
				color: white; font-weight: bold; transition: .5s; letter-spacing: .5px;
			}
			#welcom_head ul li a:hover {
				color: green;
			}
			label {
				background: green; color: white; padding: 5px 10px 5px 10px; border-radius: 10px;
				animation-name: animation_input;
				animation-duration: 1s;
				animation-iteration-count: 1;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row" id="headi_row">
				<div class="col-md-8">
					<h1><a href="">Your Phone Directory</a></h1>	
				</div>
				<div class="col-md-4" id="welcom_head">
					<h1>
						<span id="welcom">Welcome: </span>
						<a href="" id="drop_a" class="dropdown-toggle" data-toggle="dropdown">
							<span id="short_name">
								<?php echo $f_ch.$l_ch; ?><span class="caret"></span>
								</span>
						</a>
						<ul class="dropdown-menu">
							<li><a>View Profile </a></li>
							<li class="divider"></li>
							<li><a href="index.php">Home Page </a></li>
							<li><a href="Includes/logout.php">Logout </a></li>
						</ul>
					</h1>
				</div><br>
			</div><br>
		</div>
		<div class="container" id="outer_cont">
			<div class="row" id="heading_row">
				<h2>Manage Your Profile</h2>
			</div><br>
			<?php echo $msg; ?>
			<br>
			<form method="post" role="form" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-md-5 col-md-offset-1">
						<label>First Name : </label>
						<input class="form-control" type="text" name="f_name" placeholder="Your First Name..." value="<?php echo $f_name; ?>" required/>
					</div>
					<div class="col-md-5">
						<label>Last Name : </label>
						<input class="form-control" type="text" name="l_name" placeholder="Your Last Name..." value="<?php echo $l_name; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<label>Your Email : </label>
						<input class="form-control" type="email" name="email" placeholder="Your Email..." value="<?php echo $email; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<label>Your Mobile No. : </label>
						<input class="form-control" type="text" name="mobile" minlength="11" maxlength="11" placeholder="Your Mobile No..." value="<?php echo $mobile; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<label>Password : </label>
						<input class="form-control" type="text" name="pass1" minlength="6" maxlength="12" placeholder="Your Password..." value="<?php echo $pass1; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<label>Retype Password : </label>
						<input class="form-control" type="text" name="pass2" placeholder="Confirm Password..." value="<?php echo $pass2; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1" style="text-align: left;">
						<input class="btn btn-success" type="submit" value="Update" name="update"/>
						<input class="btn btn-success" type="submit" name="go_back" value="Go Back" />
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1" style="text-align: left;">
						<span style="font-weight: 600;">Already have an account in My Phone Directory ! <a href="login.php" style="text-decoration: underline; font-size: 18px;">Sign In</a><span>
					</div>
				</div>				
			</form>
		</div><br><br><br>
	</body>
</html>