<?php
// Simple API for 3 types of HTTP Methods 

// An array for practicing and processing
$finalarray = array('Bilal','Ahmad','Mudassir','Daniyal','Faraz');

// Counting length of Array
$new = count($finalarray);	

	// If HTTP Method is GET
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(!isset($_GET['id'])){
			echo json_encode(array($_SERVER['REQUEST_METHOD'].' Method'));
			echo json_encode($finalarray);		
			http_response_code(200);
			echo json_encode(array('You have selected nothing, You would have to Select an Entity by entering its index no. in URL'));
			//	exit;
		}
		else {
			http_response_code(200);
			$id = $_GET['id'];
			if($id>=$new){
				http_response_code(404);
				echo json_encode(array('Record Does not Exist'));
			}
			else {
				echo json_encode(array("You have selected $finalarray[$id]"));
			}
		//	exit;
		}

	}

	// If HTTP Method is POST
	else if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(empty($_POST)){
			http_response_code(200);
			echo json_encode(array($_SERVER['REQUEST_METHOD'].' Method'));
			echo json_encode($finalarray);
			echo json_encode(array('You have entered Nothing, Enter an Entity in Array by using Form Data in Body'));
			//	exit;
		}
		else {
			http_response_code(200);
			$id = $_POST;
			$newArray = array($id);
			$finalarray = array_merge($finalarray,$newArray);
			if($id>=$new){
				http_response_code(404);
				echo json_encode(array('Record Does not Exist'));
			}
			else {
				echo json_encode($finalarray);
			}
			//exit;
		}

	}


	// If HTTP Method is PUT --> Not completed
	else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
		
		if(empty($_POST)){
			http_response_code(200);
			echo json_encode(array($_SERVER['REQUEST_METHOD'].' Method'));
			echo json_encode($finalarray);
			echo json_encode(array('You have Selected Nothing to Update, Enter an Entity in Array by using Form Data in Body'));
			//	exit;
		}
		else {
			http_response_code(200);


		}
	}


	// If HTTP Method is DELETE
	else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
		if(empty($_GET['id'])){
			http_response_code(200);
			echo json_encode(array($_SERVER['REQUEST_METHOD'].' Method'));
			echo json_encode($finalarray);
				echo json_encode(array('You have selected nothing to Delete, Select an Entity to be deleted by entering its index no. in URL'));
			//	exit;
		}
		else {
			http_response_code(200);
			$id = $_GET['id'];
			$ack = $finalarray[$id];
			unset($finalarray[$id]);
			echo json_encode($finalarray);
			if($id>=$new){
				http_response_code(404);
				echo json_encode(array('Record Does not exists'));
			}
			else {
				echo json_encode(array('You have Deleted ',$ack));
			}
		//	exit;
		}

	}

	// If any other HTTP Method is encoutered
	else {
		http_response_code(405);
		echo json_encode(array("Status"=>"Method Not Allowed"));
	}

?>