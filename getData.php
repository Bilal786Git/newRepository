<?php 
if($_SERVER["REQUEST_METHOD"] != "GET") 
	{ 
		http_response_code(400);
		$finalArray = array('error'=>'Method Undefined');
		echo json_encode($finalArray);
		exit;
	}


$finals = array('Bilal' => 38,'Mudassar' => 39);

if (!isset($_GET['id'])) 
	{
			http_response_code(400);
			$finalArray = array('status' => FALSE,'data'=>'Something Went Wrong.');
			echo json_encode($finalArray);
			exit;
	}
$id = $_GET['id']; $array = array();
foreach ($finals as $key => $val) {
	if ($id == $val) {
		$array[] = array($key =>  $val);
	}
}

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