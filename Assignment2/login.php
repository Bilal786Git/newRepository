<?php
session_start();
	$email=''; $pass=''; $msg='';
	include('Includes/connect.php');
	include('Includes/bootstrap.php');
	include('Includes/login_valid.php');
	
?>
		<title>Login Form</title>
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
				margin-top: 30px; border: 1px solid green; padding: 20px 20px; border-radius: 20px;
				box-shadow: 0 0 10px green; width: 50%;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			@keyframes animation {
				from {opacity: 0; background: white; margin-top: 80px;}
				to {opacity: 1; background: transparent; margin-top: 30px;}
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
				<h2>Log In Your Accounts</h2>
			</div>
			<br>
			<?php echo $msg; ?>
			<br>
			<form method="post" role="form" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<input class="form-control" type="email" name="email" placeholder="Your Email..." value="<?php echo $email; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1">
						<input class="form-control" type="password" name="pass1" placeholder="Your Password..." value="<?php echo $pass; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1" style="text-align: left;">
						<input class="btn btn-success" type="submit" name="login" value="LogIn"/>
						<input class="btn btn-primary" type="submit" name="pass_forgot" value="Forgot password???" />
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10 col-md-offset-1" style="text-align: left;">
						<span style="font-weight: 600;">Don't have any account in My Phone Directory ! <a href="registration.php" style="text-decoration: underline; font-size: 18px;">Create Account</a><span>
					</div>
				</div>				
			</form>
		</div>	
	</body>
</html>