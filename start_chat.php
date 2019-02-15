<?php


$req_user_name = $_POST["req_user_name"];
$req_user_person_id = $_POST["req_person_id"];
$connected_user_name = $_POST["connected_user_name"];
$connected_user_person_id = $_POST["connected_user_person_id"];


// $req_user_name = "kamran456";
// $req_user_person_id = "1548331012.4074_kamran456_04:56:52pm";
// $connected_user_name = "imran456";
// $connected_user_person_id = "1548331014.3757_imran456_04:56:54pm";


?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>EasyChat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link rel="stylesheet" href="./css/index.css">
  	<link rel="stylesheet" href="./css/start_chat.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-expand-sm fixed-top nav-header">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-family:Comic sans MS,cursive,sans-serif">
          <span>EasyChat   </span><i class="fas fa-home"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span></span><span class="sr-only">Home</span></a>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
  </nav><br><br><br><br>

	<div class="container">
		<div class="card col-sm-10">
			<div class="card-header">
				<h3>You are connected to : <span><?php echo $connected_user_name;?></span>
          <span><form id="next_partner_f" action="" method="POST"  onsubmit="return  false;" style="display:inline;"><!-- onsubmit="return false;"> -->
            <input type="hidden" name="req_user_name" id="req_user_name" value="">
            <input type="hidden" name="req_person_id" id="req_person_id" value="">
            <input type="hidden" name="connected_user_name" id="connected_user_name" value="">
            <input type="hidden" name="connected_user_person_id" id="connected_user_person_id" value="">
            <input type="submit" name="change_partner" id="change_partner" value="change_partner" style="display:none;">

            <button type="submit" class="next_partner_b" name="next_partner"><i class="far fa-times-circle "></i></button>
          </form></span>
        </h3>
			</div><br>
			<div class="card-body col-sm-10">
        <div class="msg_container ">
          
        </div>
			</div><br>
			<div class="card-footer text-center">
        <div class="row " ><!--card-footer-container-->
          <div class="col-sm-10 col-md-10 col-lg-10" style="margin:auto;">
            <form id="insert_msg_f" action="" onsubmit="return false;" method="POST" enctype="multipart/form-data"><!--  action="./php/insert_messages.php" method="POST"> -->
              <div class="row" >
                <input type="text" plachoder="write message here..." class="form-control  col-sm-12 col-md-8 col-lg-9 msg" name="msg">
               <input type="hidden" name="name" id="name" value="<?php echo $req_user_name;?>">
                <input type="hidden" name="person_id" id="person_id" value="<?php echo $req_user_person_id;?>">
                <input type="hidden" name="connected_user_person_id" id="connected_user_person_id" value="<?php echo $connected_user_person_id;?>">
                <input type="file" id="choose_file" name="choose_file" value="" style="display:none;"> 
                <input type="submit" id="upload_image_b" value="upload_image_b" style="display:none;"> 

                <!-- <input type="hidden" name="person_id" value=""> -->
                <div class="card-footer-btn  col-sm-12 col-md-4 col-lg-3" >
                  <div class="row">
                    <button class="btn btn-md f_icon  col-sm-6 col-md-6 col-lg-6 camera" id="camera">
                      <i class="fas fa-camera"></i>
                    </button>
<!--                     <button class="btn btn-md f_icon  col-sm-4 col-md-4 col-lg-4 microphone" id="microphone">
                      <i class="fas fa-microphone"></i>
                      <input type="file" id="record_audio"style="display:none;">
                    </button> -->
                    <button class="btn btn-md  col-sm-6 col-md-6 col-lg-6 send_msg"  >Send</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
				

		</div>
	</div><br><br>

  <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 ft" ><br>
            <h2 style="font-family:Comic sans MS,cursive,sans-serif">Easychat</h2>
            <p>Easy chat is a place where you can chat with stangers, and make new friends.</p>
            <!-- <br><br><br><br><br> -->
          </div>
          <div class="col-sm-4 ft" ><br>
            <h3>Social accounts</h3><br>
            <a href="#"><i class="fab fa-facebook"></i>    Facebook</a><br><br>
            <a href="#"><i class="fab fa-twitter">    Twitter</i></a><br><br>
            <a href="#"><i class="fab fa-instagram">    Instagram</i></a><br><br>
            <span></span>
          </div>
          <div class="col-sm-4 ft" ><br>
           <h3>Our contacts</h3><br>
           <p><i class="far fa-envelope"></i>    kamran8545@gmail.com</p>
           <p ><i class="fas fa-phone"></i>    +923333945428</p>
           <p ><i class="fab fa-whatsapp"></i>    +923333945428</p>

          
          </div><br><br>
        </div>

      </div>
        
      <div class="copy_right">
        <h4><i class="far fa-copyright"></i>  2019 Copyright: Easychat.com</h4>
      </div>
  </footer>

  <!-- MODAL -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="loading_b" data-target="#loading_container" style="display:none;">Open Large Modal</button>
  <div class="modal fade loading_container" id="loading_container" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <div class="modal-body">
          <div class="loader"></div>
        </div>
        
      </div>
    </div>
  </div>


  <script>

    $(document).ready(function(){

    
      var previous_id = 0;
      
      $(".send_msg").click(function(){
        // alert("send msg");
        $("#insert_msg_f").attr("onsubmit","return false;");
         $("#insert_msg_f").attr("action","");
      
        $.ajax({
          url:"./php/insert_messages.php",
          type:"POST",
          dataType:'JSON',
          data:$("#insert_msg_f").serialize(),
          success:function(data){
            // alert(data);
            updateUI(data);
          },
          error:function(e){
            alert("Error : "+e);
          }

        });

      $(".msg").val("");


      });

      $("#choose_file").change(function(){
        
         var fd  =  new FormData();
         var files = $("#choose_file")[0].files[0];
         fd.append('choose_file',files);
         fd.append('person_id',$("#person_id").val());
         fd.append("name",$("#name").val());
         fd.append("connected_user_person_id",$("#connected_user_person_id").val());
         // alert("input value changed   "+$("#person_id").val());


        $.ajax({
          url:"./php/upload_image.php",
          type:"POST",
          dataType:"JSON",
          data:fd,
          contentType:false,
          processData:false,
          success:function(data){
            // alert(data);
            // updateUI(data);

            var response = data.response;
            if(response === "ok"){
            var url = data.url;
            // alert(data.url);

              $(".msg_container").append("<br><p class='mr-auto' style='background-color:white;'><img class='img-rounded' style='border:1px solid #d21f3c;width:70%;height:300px;' src='"+url+"' alt='unable to display image.'></p><br><br>");
            }else{
              alert(data.message);
            }
          },
          error:function(e){
            alert(e);
          }
        });
      });



      // $(".microphone").click(function(){
      //   // alert("microphone");
      //   document.getElementById("#record_audio").click();
      // });

      $(".next_partner_b").click(function(){
        loading();
        $.ajax({
                url:"./php/find_partner.php",
                type:"POST",
                dataType:"JSON",
                data:$("#next_partner_f").serialize(),
                success:function(data_find_partner){
                  // var exec = true;
                  var partner = data_find_partner.response;
                  // alert("partner "+partner);
                   
                  if(partner == "someone connected me" || partner == "i connected someone"){
                    // window.location = "./start_chat.php";
                   $("#next_partner_f")[0].reset();
                   $("#req_user_name").val(data_find_partner.req_user_name);
                   $("#req_person_id").val(data_find_partner.req_person_id);
                   $("#connected_user_name").val(data_find_partner.connected_user_name);
                   $("#connected_user_person_id").val(data_find_partner.connected_user_person_id);
                   $("#find_partner_f").attr("onsubmit","");
                   $("#find_partner_f").attr("action","./start_chat.php");
                   loading();
                   document.getElementById("change_partner").click();
                   //redirt();

                  
                  }else{
                    alert(partner);
                    loading();
                    window.location = "./index.php";

                  }
                },
                error:function(e){

                  alert("find_partner error : "+e);
                  loading();
                  window.location = "./index.php";

                }
              });
      });

      function updateUI(data){
        var response = data.response;
        var result = data.result;
            var result2 = data.result2;

            if(response != "empty" && response=="ok"){
              if(result2 != "empty" && result2 =="ok" && result != "empty" && result == "ok"){
                var id2 = data.id2;
                var time2 = data.time2;
                var date2 = data.date2;
                var message2 = data.message2;
                var image_url2 = data.image_url2;
                var time = data.time;
                var date = data.date;
                var message = data.message;
                var image_url = data.image_url;
                // alert("message : "+id2+"  url : "+image_url+"   m2  : "+previous_id);


                if(id2 != previous_id){
                  previous_id = id2;
                  if(message2 == "this*is*a*image"){
                    if(image_url2 != '0'  && image_url2 != "null" && image_url2 != ""){
                      $(".msg_container").append("<br><p class='ml-auto' style='background-color:white;'>connected<img class='rounded' style='border:1px solid #d21f3c;width:70%;height:300px;' src='"+image_url2+"' alt='unable to display image.'></p><br><br>");
                    }

                  }else{
                    $(".msg_container").append("<p class='ml-auto'>"+message2+"</p>");
                  }

                }


                if(message == "this*is*a*image"){
                  if(image_url != '0'  && image_url != "null" && image_url != ""){
                     $(".msg_container").append("<br><p class='mr-auto' style='background-color:none;'>itself<img class='rounded' style='width:70%;height:300px;' src='"+image_url+"' alt='unable to display image.'></p><br><br>");
                  }

                }
                else{
                  $(".msg_container").append("<p class='mr-auto' style='background-color:white;border:1px solid #d21f3c;color:#d21f3c;'>"+message+"</p>");

                }  
              }
              
              else if(result != "empty" && result =="ok" && result2 == "empty" ){
                var time = data.time;
                var date = data.date;
                var message = data.message;
                var image_url = data.image_url;
                alert("message : "+message+"  message2 : "+image_url);
                if(message == "this*is*a*image"){
                  if(image_url != '0'  && image_url != "null" && image_url != ""){
                    $(".msg_container").append("<br><p class='ml-auto' style='background-color:none;'><img class='rounded' style='border:1px solid #d21f3c;width:70%;height:300px;' src='"+image_url+"' alt='unable to display image.'></p><br><br>");
                  }

                }else{
                  $(".msg_container").append("<p class='mr-auto' style='background-color:white;border:1px solid #d21f3c;color:#d21f3c;'>"+message+"</p>");
                }
              
              }
              else if(result2 != "empty" && result2 =="ok" && result == "empty" ){
                var id2 = data.id2;
                var time2 = data.time2;
                var date2 = data.date2;
                var message2 = data.message2;
                var image_url2 = data.image_url2;
                alert("message : "+message2+"  message2 : "+image_url2);

                if(message2 == "this*is*a*image"){
                  if(image_url2 != '0'  && image_url2 != "null" && image_url2 != ""){
                    $(".msg_container").append("<br><p class='ml-auto' style='background-color:none;'><img class='rounded' style='border:1px solid #d21f3c;width:70%;height:300px;' src='"+image_url2+"' alt='unable to display image.'></p><br><br>");
                  }

                }
                else{
                  if(id2 != previous_id){
                    previous_id = id2;
                    $(".msg_container").append("<p class='ml-auto'>"+message2+"</p>");

                  }  
                }
                
              }
                

            }      
   }//end of updateUI()

      
    });

    // document.getElementById("microphone").onclick = function(){
    //   document.getElementById("record_audio").click();
    // }
    document.getElementById("camera").onclick = function(){
      // alert("camera clickeddd");
      document.getElementById("choose_file").click();
    }

    function redirt(){
      document.getElementById("change_partner").click();
   }


   var loaderIndi = true;

   function loading(){
    if(loaderIndi){
      document.getElementById("loading_b").click();
      loaderIndi = false;

    }else{
      document.getElementById("loading_b").click();
      loaderIndi = true;
    }
   }


   
  </script>
</body>
</html>