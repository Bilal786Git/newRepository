<?php
session_start();
	include('Includes/connect.php');
	include('Includes/bootstrap.php');

?>
		<title>My Phone Directory</title>
		<style type="text/css">
			body {
				background: url('Images/-391823496.jpg') center fixed;
				background-size: 100% 100%;
				height: 700px;
				overflow-y: hidden;
			}
			#brand_div h1 {
				color: white; text-shadow: 1px 1px 2px white;
			}
			#brand_div a {
				color: white; text-decoration: none;
			}
			@keyframes animation_col-md {
				from {opacity: 0; background: transparent; margin-top: 40px;}
				to {opacity: .8; background: white; margin-top: 0px;}
			}
			#main_cont .col-md-7 {
				padding: 20px; font-size: 25px; font-weight: lighter; background: white;
				opacity: .8; text-align: justify; margin-right: 40px; box-shadow: 5px 5px 15px black;
				animation-name: animation_col-md;
				animation-duration: 1s;
				animation-iteration-count: 1;
			}
			#main_cont .col-md-7:hover {
				box-shadow: 0 0 15px black;
			}
			@keyframes animation_p {
				from {color: white;}
				to {color: black;}
			}
			#main_cont .col-md-7 p {
				text-shadow: 0 0 3px white; color: black;
				animation-name: animation_p;
				animation-duration: 5s;
				animation-iteration-count: 1;
			}
			#main_cont .col-md-4 div {
				font-size: 20px; font-weight: bold; padding: 23px; opacity: .7; box-shadow: 5px 5px 15px black;
				animation-name: animation_div;
				animation-duration: 1.5s;
				animation-iteration-count: 1;
			}
			@keyframes animation_div {
				from{opacity: 0; margin-top: 40px;}
				to{opacity: .7; margin-top: 0px;}
			}
			#main_cont .col-md-4 div:hover {
				box-shadow: 0 0 10px black;
			}
			#main_cont #links_div {
				text-align: center;
			}
			#main_cont #links_div a {
				text-decoration: none;
			}
			#author_div {
				background: transparent; text-shadow: 1px 1px 4px black; text-align: right; 
				font-family: italic;
			}
		</style>
	</head>
	<body><br>
		<div class="container" id="brand_div">
			<h1><a href="index.php">My Phone Directory</a></h1>
		</div><br><br><br><br>
		<div class="container" id="main_cont">
			<div class="row">
				<div class="col-md-7">
					<p>
					This is the My Phone Directory. Actually It is a type of a contact book where you can place and yup! save your contacts, also delete or edit your contacts.
					Now If you want to use this full featured contact book You just have to create an account in it by providing your Email as primary identity.
					</p>
				</div>
				<div class="col-md-4" id="links_div">
					<a href="registration.php" style="color: white;">
						<div style="background: green;">
							Create Account <spna class="glyphicon glyphicon-list"></spna>
						</div>
					</a>
					<br>
					<a href="login.php" style="color: yellow;">
						<div style="background: red;">
							Sign In <span class="glyphicon glyphicon-log-in"></span>
						</div>
					</a>
					<br>
					<a href="" style="color: cyan;">
						<div style="background: blue;">
							About Trainee <span class="glyphicon glyphicon-user"></span>
						</div>
					</a>
				</div>
			</div>
		</div><br>
		<div class="container" id="author_div">
			<h2> Coded and Designed by </h2> <h1> Bilal Ahmad </h1> <h3> at eRozgaar (PU) </h3>
		</div>
		
	</body>
</html>