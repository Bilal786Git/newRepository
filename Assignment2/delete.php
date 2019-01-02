<?php 
session_start();
include('Includes/connect.php');

$cid = $_GET['cid'];
$email = $_SESSION['email'];
mysqli_query($con, "DELETE FROM contact_book WHERE id='$cid' AND email='$email'");
header('location: profile.php');
?>
