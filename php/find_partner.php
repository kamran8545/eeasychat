<?php 

include("db_con.php");
$req_user_namee = $_POST["req_user_name"];
$req_person_idd = $_POST["req_person_id"];


if($con){
	$connection_id = "";
	$i = 1;
	$indicator  = false;
	$connected_user_indicator = false;
	for($i;$i<4;$i++)
	{		
	// echo "for loop";
	  if($indicator){
		$indicator = false;
		break;
	  }

	  $sql = "select connected from randomchat where person_id = '".$req_person_idd."'";
   	  $indi = mysqli_fetch_array(mysqli_query($con,$sql))["connected"];
   	  if($indi == 1){
   	  	// echo "connection id ".$connection_id;
   	  	$sql = "select * from randomchat where connection_id = ( select  connection_id from randomchat where person_id = '".$req_person_idd."') and not person_id = '".$req_person_idd."'" ;
   	  	// echo $sql;
   	  	$result = mysqli_fetch_array(mysqli_query($con,$sql));
   	  	echo json_encode(array("response"=>"someone connected me","req_person_id"=>$req_person_idd,"req_user_name"=>$req_user_namee,"connected_user_person_id"=>$result["person_id"],"connected_user_name"=>$result["name"]));
   	  	break;

   	  }else{
   	  	$sql = "select * from randomchat where online = '1' AND connected = '0' and not person_id = '".$req_person_idd."' order by rand() desc";
		$result = mysqli_query($con,$sql);
		if($result != null && $result !="" && $result->num_rows){
			while($res = mysqli_fetch_assoc($result)){
				$id = $res["id"];
				$time = $res["time"];
				$date = $res["date"];
				$name = $res["name"];
				$person_id = $res["person_id"];
				$gender = $res["gender"];
				$message = $res["message"];
				$online = $res["online"];
				$connected = $res["connected"];
				date_default_timezone_set("Asia/Karachi");
				$time = date('h:s:a'); 
				$date = date('Y:m:d');

				$sql_query = "update randomchat set connected = ".true." where id = ".$id;
				mysqli_query($con,$sql_query);
				$sql_query = "update randomchat set connected = ".true." where person_id = '".$req_person_idd."'";
				mysqli_query($con,$sql_query);
				$connection_id = $id."_".date('h:s:a')."_".date('Y:m:d')."_".$req_person_idd;
				$sql_query = "update randomchat set connection_id = '".$connection_id."' where id = ".$id;
				mysqli_query($con,$sql_query);
				$sql_query = "update randomchat set connection_id = '".$connection_id."' where person_id = '".$req_person_idd."'";
				mysqli_query($con,$sql_query);
				// $connected_user_indicator  = true;
				$indicator = true;
				echo json_encode(array("response"=>"i connected someone","req_person_id"=>$req_person_idd,"req_user_name"=>$req_user_namee,"connected_user_person_id"=>$person_id,"connected_user_name"=>$name));
				break;
   			}
		}
		else{
			if($i == 3){
			  echo json_encode(array("response"=>"No one is online"));
			}

	  	}
	  }//if i am not connected and connected

	  sleep(7);

	}//end of loop

}else{
	echo json_encode(array("response"=>"Unable to connect to database"));
}



mysqli_close($con);

?>