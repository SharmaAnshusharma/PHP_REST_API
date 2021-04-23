<?php
include('dbconnection.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: DELETE');

$request = $_SERVER['REQUEST_METHOD']; 
if($request == 'DELETE')
{
	$data = json_decode(file_get_contents("php://input"),true);
	$id = $data['id'];
	

	$query = mysqli_query($con,"DELETE FROM `user` WHERE `ID` ='$id' ");
	if($query == true)
	{
		echo json_encode(array('Message'=>'Record Deleted Successfully','status'=> true));
	}
	else
	{
		echo json_encode(array('Message'=>'Record Not Deleted','status'=> false));
	}

}
else
{
	echo "Proper Method is not Used!";
}

?>