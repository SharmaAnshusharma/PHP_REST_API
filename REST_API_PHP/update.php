<?php
include('dbconnection.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: PUT');

$request = $_SERVER['REQUEST_METHOD']; 
if($request == 'PUT')
{
$data = json_decode(file_get_contents("php://input"),true);
	$id = $data['id'];
	$name = $data['name'];
	$age = $data['age'];
	
	$query = mysqli_query($con,"UPDATE `user` SET `User Name`='$name', `Age`='$age' WHERE `ID` ='$id' ");
	if($query == true)
	{
		echo json_encode(array('Message'=>'Record Updated Successfully','status'=> true));
	}
	else
	{
		echo json_encode(array('Message'=>'Record Not Updated','status'=> false));
	}
}
else
{
	echo "Proper Method is not used!";
}
?>