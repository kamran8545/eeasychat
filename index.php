<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>EasyChat</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="./css/index.css">

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
  </nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/first_slider.jpg" alt="image" width="1100" height="500">
      <div class="carousel-caption slider-text">
        <h3>EasyChat</h3>
        <p>We connect people easily.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/second_slider.jpg" alt="image" width="1100" height="500">
      <div class="carousel-caption slider-text">
        <h3>EasyChat</h3>
        <p>We  connect people easily.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/third_slider.jpg" alt="image" width="1100" height="500">
      <div class="carousel-caption slider-text">
        <h3>EasyChat</h3>
        <p>we connect people easily.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><br><br>

	<div class="container"><br><br>
    <div class="card col-sm-6">
      <form action="" method="POST" onsubmit="return false;" id="start_chat_f">
        <h3>Enter your name :</h3>
        <div class="form-group">
          <input type="text" id="name" name="name" class="form-control" required><br>
          <!-- <label>Gender</label><br> -->
          <input type="radio" name="gender" value="male" required> Male<br>
          <input type="radio" name="gender" value="female" required> Female<br>
          <input type="radio" name="gender" value="other" required> Other<br><br>
          <div class="text-center">
            <input type="submit" class="btn btn-lg start_chat" value="Start chat" style="text-align:center;">
          </div>
        </div>
      </form>
      <form action="" method="POST" onsubmit="return false;" id="find_partner_f">
        
        <input type="hidden" id="req_person_id"  name="req_person_id" value="">
        <input type="hidden" id="req_user_name" name="req_user_name" value="">
        <input type="hidden" id="connected_user_person_id"  name="connected_user_person_id" value="">
        <input type="hidden" id="connected_user_name" name="connected_user_name" value="">
        <input type="submit" id="redirect" value="redirect" style="display:none;">

      </form>


    </div>
     
	</div><br><br>
  <!-- FOOTER -->
  <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 ft" ><br>
            <h2 style="font-family:Comic sans MS,cursive,sans-serif">EasyChat</h2>
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
    $(".start_chat").click(function(){
      loading();
      if($("#name").val() != ""){
         $.ajax({
          url:"./php/create_user.php",
          type:"POST",
          dataType:"JSON",
          data:$("#start_chat_f").serialize(),
          success:function(data){
            
            var response = data.response;
            // alert(data.namee+" "data.person_id);

            $("#req_user_name").val(data.namee);
            $("#req_person_id").val(data.person_id);
            // alert(response);
            if(response == "User created successfully"){
              $.ajax({
                url:"./php/find_partner.php",
                type:"POST",
                dataType:"JSON",
                data:$("#find_partner_f").serialize(),
                success:function(data_find_partner){
                  // var exec = true;
                  var partner = data_find_partner.response;
                  // alert("partner "+partner);
                   
                  if(partner == "someone connected me" || partner == "i connected someone"){
                    // window.location = "./start_chat.php";
                   $("#start_chat_f")[0].reset();
                   $("#req_user_name").val(data_find_partner.req_user_name);
                   $("#req_person_id").val(data_find_partner.req_person_id);
                   $("#connected_user_name").val(data_find_partner.connected_user_name);
                   $("#connected_user_person_id").val(data_find_partner.connected_user_person_id);
                   $("#find_partner_f").attr("onsubmit","");
                   $("#find_partner_f").attr("action","./start_chat.php");
                   loading();
                   document.getElementById("redirect").click();
                   //redirt();

                  
                  }else{
                    alert(partner);
                    loading();

                  }
                },
                error:function(e){

                  alert("find_partner error : "+e);
                  loading();
                  //window.location = "./start_chat.php";

                }
              });
            }
          },
          error:function(e){
            alert("create user error : "+e);
            loading();
          }
        });
      }
      else{
        // document.getElementById("#name").placeholde = "Enter your name";
      }
      

    });
   

   });

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