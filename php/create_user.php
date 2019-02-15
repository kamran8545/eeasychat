<?php
include ("./db_con.php");

$name = $_POST["name"];
  $gender = $_POST["gender"];
  $message = "";
  $online = true;
  $connected = false;//make it false
  date_default_timezone_set("Asia/Karachi");
  $time = date("h:i:sa");
  $date = date("Y/m/d");
  $person_id = microtime_float()."_".$name."_".$time;
  if($con){
    $sql = "insert into randomchat(time,date,name,person_id,gender,message,online,connected,connection_id) values('$time','$date','$name','$person_id','$gender','$message','$online','$connected','0')";
    mysqli_query($con,$sql);
    echo json_encode(array("response"=>"User created successfully","person_id"=>$person_id,"namee"=>$name));
   
  }else{
     echo json_encode(array("response"=>"Unable to create user"));
  }
  mysqli_close($con);
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

?>
