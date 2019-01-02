<?php
session_start();
	$f_name=''; $l_name=''; $email=''; $mobile=''; $pass1=''; $pass2=''; $msg='';
	include('Includes/connect.php');
	include('Includes/bootstrap.php');
	include('Includes/registration_valid.php');
?>
		<title>Registration Form</title>
		<link type="text/css" rel="stylesheet" href="Styles/registration_style.css" />
		<style type="text/css">
			body {
				background: url('Images/-391823496.jpg') center fixed;
				background-size: 100% 100%;
				overflow-y: hidden;
			}
			#brand_div h1 {
				color: white; text-shadow: 1px 1px 2px white;
			}
			#brand_div a {
				color: white; text-decoration: none;
			}
			#outer_cont {
				margin-top: 20px; border: 1px solid green; padding: 20px 20px; border-radius: 20px;
				box-shadow: 0 0 10px green; width: 50%;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			@keyframes animation {
				from {opacity: 0; background: white; margin-top: 70px;}
				to {opacity: 1; background: transparent; margin-top: 20px;}
			}
			#outer_cont #heading_row {
				text-align: center; color: white; margin-left: 90px; margin-right: 90px;
				border: 1px solid white; box-shadow: 0 0 4px black; padding-bottom: 8px;
			}
			#outer_cont #heading_row h2 {
				text-shadow: 0 0 5px white;
			}
			#outer_cont form input {
				border-radius: 0px; border: 1px solid green; height: 40px; font-weight: 600;
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
		</style>
	</head>
	<body>
		<div class="container" id="brand_div">
			<h1><a href="index.php">My Phone Directory</a></h1>
		</div>
		<div class="container" id="outer_cont">
			<div class="row" id="heading_row">
				<h2>Create Your Accounts</h2>
			</div><br>
			<?php echo $msg; ?>
			<br>
			<form method="post" role="form" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-md-5 col-md-offset-1">
						<input class="form-control" type="text" name="f_name" placeholder="Your First Name..." value="<?php echo $f_name; ?>" required/>
					</div>
					<div class="col-md-5">
						<input class="form-control" type="text" name="l_name" placeholder="Your Last Name..." value="<?php echo $l_name; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<input class="form-control" type="email" name="email" placeholder="Your Email..." value="<?php echo $email; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<input class="form-control" type="text" name="mobile" minlength="11" maxlength="11" placeholder="Your Mobile No..." value="<?php echo $mobile; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<input class="form-control" type="password" name="pass1" minlength="6" maxlength="12" placeholder="Your Password..." value="<?php echo $pass1; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<input class="form-control" type="password" name="pass2" placeholder="Confirm Password..." value="<?php echo $pass2; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1" style="text-align: left;">
						<input class="btn btn-success" type="submit" name="submit" required/>
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