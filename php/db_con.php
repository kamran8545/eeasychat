<?php 

	$HOST = "localhost";
	$DATABASE = "easychat";
	$USERNAME = "root";
	$PASSWORD = "";

	$con = new mysqli($HOST,$USERNAME,$PASSWORD,$DATABASE);
	if($con){
	//	$sql  = "select * from randomchat";
	//	$result = mysqli_fetch_array(mysqli_query($con,$sql));
		 // echo "connection established!";
	}
	else{
		echo "unable to connect with database";
	}


?>