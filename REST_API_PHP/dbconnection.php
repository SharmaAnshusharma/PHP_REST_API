<?php



$con = mysqli_connect("localhost","root","","api");
if(!$con)
{
	echo "Mysql Connect Error".mysqli_connect_error();
}


?>