<?php

include("db_con.php");
date_default_timezone_set("Asia/Karachi");
$time = date("h:i:sa");
$date = date("Y/m/d");
$msg = $_POST["msg"];
$person_id = $_POST["person_id"];
$connected_user_person_id = $_POST["connected_user_person_id"];
if($con){


	
 	$sql  = "insert into messages(time,date,person_id,message,url) values('$time','$date','$person_id','$msg','0')";
 	if(mysqli_query($con,$sql)){
 		$sql = "select * from messages where id = (select max(id) as id from messages where person_id = '".$person_id."')";
 		$result =mysqli_query($con,$sql);
 		$sql = "select * from messages where id = (select max(id) as id from messages where person_id = '".$connected_user_person_id."')";
 		$result2 =mysqli_query($con,$sql);
 	
 		$response = "";
 		if($result->num_rows && !$result2->num_rows){
 			$result =mysqli_fetch_array($result);
 			$response = array('response'=>'ok','result'=>'ok','result2'=>'empty','time'=>$result["time"],'date'=>$result["date"],'person_id'=>$result["person_id"],'message'=>$result["message"],'image_url'=>$result["url"]);
 		}
 		elseif(!$result->num_rows && $result2->num_rows){
 			$result2 =mysqli_fetch_array($result2);
 			$response = array('response'=>'ok','result'=>'empty','result2'=>'ok','id2'=>$result2["id"],'time2'=>$result2["time"],'date2'=>$result2["date"],'person_id2'=>$result2["person_id"],'message2'=>$result2["message"],'image_url2'=>$result2["url"]);
 		}
 		elseif($result->num_rows && $result2->num_rows){
 			$result =mysqli_fetch_array($result);
 			$result2 =mysqli_fetch_array($result2);
 			$response = array('response'=>'ok','result'=>'ok','result2'=>'ok','time'=>$result["time"],'date'=>$result["date"],'person_id'=>$result["person_id"],'message'=>$result["message"],'image_url'=>$result["url"],
 				'id2'=>$result2["id"],'time2'=>$result2["time"],'date2'=>$result2["date"],'person_id2'=>$result2["person_id"],'message2'=>$result2["message"],'image_url2'=>$result2["url"]);
 		}
 		else{
 			$response = array('response'=>'empty','result'=>'empty','result2'=>'empty');
 		}
 		echo json_encode($response);
 			
 	}
 	else{
 		echo json_encode(array('response'=>"unable to insert message"));
 	}
}
mysqli_close($con);

?>