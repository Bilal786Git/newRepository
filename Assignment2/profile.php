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
				height: auto;
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
			#insert_btn_div {
				display: inline-block; box-shadow: 1px 1px 5px black; padding: 10px 20px;
				text-align: right;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			#insert_btn_div a {
				font-weight: bold; border-radius: 0px; font-size: 18px; color: green; 
				letter-spacing: .5px; transition: .5s;
			}
			#insert_btn_div a:hover {
				background: green; color: white; border: 1px solid green;
			}
			#table_div {
				box-shadow: 2px 2px 10px black;
				padding-top: 20px;
				animation-name: animation;
				animation-duration: 2s;
				animation-iteration-count: 1;
			}
			@keyframes animation {
				from {opacity: 0; margin-top: 50px;}
				to {opacity: 1; margin-top: 0px;}
			}
			#table_div thead {
				background: grey; color: white; font-weight: bold;
			}
			#table_div tbody {
				background: white; border: 1px solid gray;
			}
			#table_div tbody button {
				font-weight: bold;
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
			<div class="container">
				<div id="insert_btn_div">
					<a href="insert_contact.php" class="btn btn-default">Insert Contact</a>
				</div>
			</div><br>
			<div class="container" id="table_div">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>No.</td>
							<td>Name</td>
							<td>Email</td>
							<td>Mobile No.</td>
							<td>Place</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						<?php for($i=1; $i<=$row_count; $i++) { 
							$result = mysqli_fetch_array($row2);
							$No = $i;
							$id = $result['id'];
							$cname = $result['cname'];
							$cemail = $result['cemail'];
							$cmobile = $result['cmobile'];
							$cplace = $result['cplace'];
						?>
						<tr>
							<td><?php echo $No; ?></td>
							<td><?php echo $cname; ?></td>
							<td><?php echo $cemail; ?></td>
							<td><?php echo $cmobile; ?></td>
							<td><?php echo $cplace; ?></td>
							<td>
								<a href="delete.php?cid=<?php echo $id; ?>"><button class="btn btn-danger">Delete <span class="glyphicon glyphicon-trash"></span></button></a>
								<a href="update.php?cid=<?php echo $id; ?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit Number</button></a>
							</td>
						</tr>
						<?php
						}
						 ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>