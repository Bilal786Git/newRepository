<?php

$finalarray = array('Bilal','Ahmad','Mudassir','Daniyal','Faraz');

	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		http_response_code(200);
		echo $_SERVER['REQUEST_METHOD'].' Method'.'<br>';
		echo json_encode($finalarray);
		if(empty($_GET['id'])){
				http_response_code(400);
				echo '<br>'.'You have selected nothing';
				echo '<br>'.'You would have to Select an Entity by entering its index no. in URL';
				exit;
		}
		else {
			http_response_code(200);
			$id = $_GET['id'];
			echo '<br>'.json_encode($finalarray[$id]);
			exit;
		}

	}
	else if($_SERVER['REQUEST_METHOD'] == 'POST'){
		http_response_code(200);
		echo $_SERVER['REQUEST_METHOD'].' Method'.'<br>';
		echo json_encode($finalarray);

		if(empty($_POST)){
				http_response_code(400);
				echo '<br>'.'You have entered Nothing';
				echo '<br>'.'You would have to Enter an Entity in Array by using Form Data in Bodys';
				exit;
		}
		else {
			http_response_code(200);
			$id = $_POST;
			$newArray = array($id);
			$finalarray = array_merge($finalarray,$newArray);
			echo '<br>'.json_encode($finalarray);
			exit;
		}

	}
	else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
		echo "It is PUT Method";
		http_response_code(200);
	}
	else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
		http_response_code(200);
		echo $_SERVER['REQUEST_METHOD'].' Method'.'<br>';
		echo json_encode($finalarray);
		if(empty($_GET['id'])){
				http_response_code(400);
				echo '<br>'.'You have selected nothing to Delete';
				echo '<br>'.'You would have to Select an Entity to be deleted by entering its index no. in URL';
				exit;
		}
		else {
			http_response_code(200);
			$id = $_GET['id'];
			$ack = $finalarray[$id];
			unset($finalarray[$id]);
			echo '<br>'.json_encode($finalarray);
			echo '<br>'.'You have Deleted '.json_encode($ack);
			exit;
		}

	}
	else {
		echo "Method Not Allowed";
		http_response_code(405);
	}

?>