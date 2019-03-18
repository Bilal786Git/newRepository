<?php 
	// Check Method of Request
	if($_SERVER["REQUEST_METHOD"] != "POST") 
		{ 
			http_response_code(400);
			$finalArray = array('error'=>'Method Undefined');
			echo json_encode($finalArray);
			exit;
		}
	// Check whether POST value Exist or not
	if (!$_POST) 
		{
				http_response_code(404);
				$finalArray = array('status' => FALSE,'data'=>'POST data is Missing.');
				echo json_encode($finalArray);
				exit;
		}
	// Other Process
	$data = $_POST;
	$finals = array('Bilal' => 38,'Mudassar' => 39);
	$array = array_merge($data,$finals);

	// Responses
	if (!empty($array)) 
		{
			http_response_code(200);
			$finalArray = array('status' => TRUE,'data'=>$array);
			echo json_encode($finalArray);
			exit;
		}
		else
		{
			http_response_code(400);
			$finalArray = array('status' => FALSE,'data'=>'Something Went Wrong.');
			echo json_encode($finalArray);
			exit;
		}

?>