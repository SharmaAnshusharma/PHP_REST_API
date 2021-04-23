<?php
include('dbconnection.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');

$request = $_SERVER['REQUEST_METHOD']; 
$data = json_decode(file_get_contents("php://input"),true);
if($request == 'POST')
{


	if(empty($data))
	{
		echo "Data is Empty";
	}
	else
	{
		$name = $data['name'];
		$age = $data['age'];

		$query = mysqli_query($con,"INSERT INTO `user`(`User Name`, `Age`) VALUES ('$name','$age')");
		if($query == true)
		{
			echo json_encode(array('Message'=>'Record Inserted','status'=> true));
		}
		else
		{
			echo json_encode(array('Message'=>'Record Not Inserted','status'=> false));
		}
	}
}
else
{
	echo "Proper Method is not Used";
}

?>