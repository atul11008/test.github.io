<?php include ('sign-up-algorithim.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <title>Sign Up|Website</title>
  </head>
  <body>
     <div class="card-body tab-content border-0 mt-3 mb-3 ml-3 mr-3">
<!--actual profile data-->
<div class="tab-pane active" id="profile">
  <h6>Sign Up | Student</h6>
<hr>
 <form method="post" action="" id="edit-profile" enctype='multipart/form-data'>
       <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  id="cam_icon_upload" onClick="triggerClick()" style="visibility: hidden;">
                <img src="../images/camera-solid.svg" >
              </div>
              <img src="../images/beard.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage"  id="profileImage"  onChange="displayImage(this)"  class="form-control" style="display: none;" >
           <!-- <label>Profile Image</label>-->
          </div>
  <div class="mb-3">
     
  <div class="row">
    <div class="col">
      <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First name">
       <small class="form-text text-muted d-block">Please Enter your Name</small><br>
   
    </div>
    <div class="col">
      <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name">
       <small class="form-text text-muted d-block">Please Enter your Name</small><br>

    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-">
      <select id="cpp" name="c_code" class="form-control">
        <label for ="pho">Phone Number</label>
        <option selected>+91</option>
        <option>+0 01</option>
      </select>
    </div>
      <div class="col-11 col-sm-8">
      <input type="tel" name="phone_number"   class="form-control" id="phone_number">
    </div>
 </div>
    
  <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Email Id</label>
    <input type="email" placeholder="Email Id" name="user_email" class="form-control email" id="exampleFormControlInput3" value="">
    <p class="msg_email">The EMail exits</p>
    
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Password</label>
    <input type="password" placeholder="password" name="user_password" class="form-control email" id="exampleFormControlInput3" value="">

  </div>
   <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Confirm Password</label>
    <input type="text" placeholder="Confirm Password" name="confirm_password" class="form-control email" id="exampleFormControlInput3" value="">

  </div>
  
  
  <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">Address</label>
    <input type="text" class="form-control" name="user_address" id="exampleFormControlInput4" placeholder="Address">
    
  </div>
 <div class="d-none d-md-block ">
  <label>Language You Want to learn or solve :</label>
  
    <button class="btn-1">Hindi</button>
  <button class="btn-2">English</button>
  <button class="btn-3">Hinglish</button>

 </div>

 <div class="d-block d-md-none">
  <label>Select Language:</label>
  
   <select class="nice-select ">
    <option class="nice-select">Select Language you want to prefer !</option>
    <option class="nice-select">Hindi</option>
    <option class="nice-select">English</option>
    <option class="nice-select">Hinglish</option>
   </select>
 </div>
  <div class="form-group form-text text-muted">
 Already a member login from <a href="../login/login.php">here !</a>
  </div>
  <br>
  <button class="btn btn-primary w-100" type="submit" name="sign_up">Sign Up</button>

</form>
</div>
<script type="text/javascript">
   function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}

function hide_the_msg(variable,transition){
  var hiding_variable=variable;
  setInterval(function() {
    hiding_variable.hide();
  }, transition);
}
var email_msg=document.getElementById('msg_email');
hide_the_msg(email_msg,2000);
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../js/nice-select.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>