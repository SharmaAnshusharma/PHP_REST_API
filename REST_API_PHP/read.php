<?php
include('dbconnection.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET');

$request = $_SERVER['REQUEST_METHOD']; 
if($request == 'GET')
{
$query = mysqli_query($con,"SELECT * FROM `user` ");
	while($row = mysqli_fetch_array($query))
	{
		 $output[$row['ID']] = array(
	 	'ID' => $row['ID'],
	 	'User Name'=>$row['User Name'],
	 	'Age' => $row['Age']
	 );
	}
	echo json_encode($output);
}
else
{
	echo "Proper method is not used";
}
?>