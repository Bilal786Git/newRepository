<?php
session_start();
	$c_name=''; $c_email=''; $c_mobile=''; $c_place=''; $msg='';
	include('Includes/connect.php');
	include('Includes/bootstrap.php');
	include('Includes/profile_valid.php');
	function session_exist() {
		if($_SESSION['email']==''){
			return true;
		}
		else {
			return false;
		}	
	}
	
	if(session_exist($email)){
		header('location: index.php');
	}

	$cid = $_GET['cid'];
	$email = $_SESSION['email'];

	$row = mysqli_query($con, "SELECT * FROM contact_book WHERE id='$cid' AND email='$email'");
	$result = mysqli_fetch_array($row);
	$c_name = $result['cname'];
	$c_email = $result['cemail'];
	$c_mobile = $result['cmobile'];
	$c_place = $result['cplace'];

	if (isset($_POST['update'])) {
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_mobile = $_POST['c_mobile'];
		$c_place = $_POST['c_place'];

		mysqli_query($con, "UPDATE contact_book SET cname='$c_name', cemail='$c_email', cmobile='$c_mobile', cplace='$c_place' WHERE id='$cid' AND email='$email'");
		$c_name=''; $c_email=''; $c_mobile=''; $c_place='';
		$msg = "<div style='background: white; color: green; width: 82.7%; margin-left: 55px; padding: 10px 10px 10px 10px; font-weight: bold;'>Contact is Updated Successfully ! </div>";
	}
?>
		<title>Your New Contact</title>
		<style type="text/css">
			body {
				background: url('Images/-391823496.jpg') center fixed;
				background-size: 100% 100%;
				overflow-y: hidden; 
			}
			#headi_row .col-md-8 h1 {
				color: white; text-shadow: 1px 1px 2px white;
			}
			#headi_row .col-md-8 h1 a {
				color: white; text-decoration: none;
			}
			#headi_row .col-md-4 {
				padding-bottom: 20px; padding-top: 05px; font-family: italic; text-align: right; color: white;
			}
			#outer_cont {
				margin-top: 0px; border: 1px solid green; padding: 20px 20px; border-radius: 20px;
				box-shadow: 0 0 10px green; width: 50%;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			@keyframes animation {
				from {opacity: 0; background: white; margin-top: 70px;}
				to {opacity: 1; background: transparent; margin-top: 0px;}
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
			#welcom_head #welcom {
				color: cyan; text-shadow: 1px 1px 2px cyan;
			}
			#welcom_head #drop_a {
				color: white; text-decoration: none;
			}
			#welcom_head #short_name {
				color: white; border: .5px solid white; box-shadow: 0 0 10px white;
				font-family: italic; border-radius: 30%; padding: 10px;
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
							<li><a href ="view_profile.php">View Profile </a></li>
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
				<h2>Update Your Contact</h2>
			</div>
			<br>
			<?php echo $msg; ?>
			<br>
			<form method="post" role="form" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-md-5 col-md-offset-2">
						<input class="form-control" type="text" name="c_name" placeholder="Contact's Name..." value="<?php echo $c_name; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-8 col-md-offset-2">
						<input class="form-control" type="email" name="c_email" placeholder="Contact's Email..." value="<?php echo $c_email; ?>"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-8 col-md-offset-2">
						<input class="form-control" type="text" name="c_mobile" minlength="11" maxlength="11" placeholder="Contact No..." value="<?php echo $c_mobile; ?>" required/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-8 col-md-offset-2">
						<input class="form-control" type="text" name="c_place" placeholder="Contact's Place i.e; Work/Home..." value="<?php echo $c_place; ?>" required/>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-md-8 col-md-offset-2" style="text-align: left;">
						<input class="btn btn-success" type="submit" name="update" value="Insert"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-8 col-md-offset-2" style="text-align: left;">
						<span style="font-weight: 600;">Do you want to return to Phone Book ! <a href="profile.php" style="text-decoration: underline; font-size: 18px;">Return</a><span>
					</div>
				</div>				
			</form>
		</div>	
	</body>
</html>