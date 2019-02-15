<?php
  include('db_con.php');
 
  $upload_path = "../images/uploaded/";
  $server_ip = gethostbyname(gethostname());
  $upload_url = 'http://'.$server_ip.'/easychat/images/uploaded/';
  date_default_timezone_set("Asia/Karachi");
  $time = date("h:s:a");
  $date = date("Y:m:d");
  $response = array();
  // echo "before if";
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(isset($_FILES['choose_file']['name'])){
     $name = microtime_float().$_POST["name"];
     // $person_id = "";
     $person_id = $_POST["person_id"];
     $connected_user_person_id = $_POST["connected_user_person_id"];

      // $image_name = $_POST['image_name'];	

      // echo "person_id  ".$person_id;
      $fileinfo = pathinfo($_FILES['choose_file']['name']);
      $extension = $fileinfo['extension'];
      // echo "before extension";
      if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif"){
        $file_url = $upload_url.$name.'.'.$extension;
        $file_path = $upload_path.$name.'.'.$extension;
      // echo "file url ".$file_url."\n";
      // echo "file path ".$file_path;
        // echo "extension is fine";
        try{
          move_uploaded_file($_FILES['choose_file']['tmp_name'],$file_path);
          $sql = "insert into messages (time,date,person_id,message,url) values('$time','$date','$person_id','this*is*a*image','$file_url')";
          if(mysqli_query($con,$sql)){




            $response['response'] = "ok";
            $response['error'] = false;
            $response['url'] = $file_url;
            $response['name'] = $name;
          }
        }catch(Exception $e){
          $response['response'] = "okk";
          $response['error'] = false;
          $response['message'] = $e->getMessage();
        }
        mysqli_close($con);
      }else{
        $response['response'] = "error";
        $response['error'] = true;
        $response['message'] = 'Selected file is not image.';
      }
      
    }
    else{
      $response['response'] = "error";
    	$response['error'] = true;
    	$response['message'] = 'Please choose a file.';

    }

    echo json_encode($response);
  }
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}


?>