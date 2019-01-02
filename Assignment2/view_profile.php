<?php
session_start();
	include('Includes/bootstrap.php');
	include('Includes/connect.php');
	include('Includes/profile_valid.php');

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
	<title>Your Profile</title>
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
			#manage_div {
				display: inline-block; box-shadow: 1px 1px 5px black; padding: 10px 20px;
				text-align: right; border: 1px solid black; margin-top: 0px; margin-bottom: 15px;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			#manage_div a {
				font-weight: bold; border-radius: 0px; font-size: 18px; color: green; 
				letter-spacing: .5px; transition: .5s;
			}
			#manage_div a:hover {
				background: green; color: white; border: 1px solid green;
			}
			@keyframes animation {
				from {opacity: 0; margin-top: 50px;}
				to {opacity: 1; margin-top: 0px;}
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
			#profile_cont #profile_div {
				border: 1px solid black; margin-top: 0px; box-shadow: 0 0 10px black;
				padding: 10px 30px;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			#profile_div #profile_head #h1 {
				text-align: center; border-top: 1px solid black; background: white;
				border-bottom: 1px solid black; padding-bottom: 10px;
				color: green; text-shadow: 0 0 5px white; box-shadow: 0 0 10px black;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			#profile_div #data_row {
				border: 1px solid black;
				animation-name: animation;
				animation-duration: 1s;
				animation-iteration-count: 1;
			}
			#profile_div #data_row h1 {
				text-shadow: 0 0 2px white; color: white; background: green; padding-left: 10px; padding-top: 5px; padding-bottom: 5px; border-radius: 10px;
			}
			#profile_div #data_row h2 {
				margin-top: 25px; text-shadow: 1px 1px 3px black;
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
			<div class="container" id="profile_cont">
				<div class="row">
					<div class="col-md-3" style="margin-right: -50px;">
						<div id="manage_div">
							<a href="manage.php" class="btn btn-default">Manage Profile</a>
						</div>
						<div id="manage_div">
							<a href="profile.php" class="btn btn-default">Go Back</a>
						</div>
					</div>
					<div class="col-md-9" id="profile_div">
						<div class="row" id="profile_head">
							<div class="col-md-12" id="h1">
								<h1><span class="glyphicon glyphicon-user"></span> Your Profile</h1>
							</div>
						</div>
						<div class="row" id="data_row">
							<div class="col-md-6">
								<h1>Your Name : </h1>
							</div>
							<div class="col-md-6">
								<h2><?php echo $f_name." ".$l_name; ?></h2>
							</div>
						</div>
						<div class="row" id="data_row">
							<div class="col-md-6">
								<h1>Your Email : </h1>
							</div>
							<div class="col-md-6">
								<h2><?php echo $email; ?></h2>
							</div>
						</div>
						<div class="row" id="data_row">
							<div class="col-md-6">
								<h1>Your Mobile No. : </h1>
							</div>
							<div class="col-md-6">
								<h2><?php echo $mobile; ?></h2>
							</div>
						</div>
						<div class="row" id="data_row">
							<div class="col-md-6">
								<h1>Your Password : </h1>
							</div>
							<div class="col-md-6">
								<h2><?php echo $pass; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div><br>
		</div>
	</body>
</html>