<?php include ('login-algorithim.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <title>Login|Website</title>
  </head>
  <body>
    <img id="img" src="../images/866-536x354.jpg" />
     <div class="card-body tab-content border-0 mt-3 mb-3 ml-3 mr-3">
<!--actual profile data-->
<div class="tab-pane active login-student" id="profile">
  <h6>Login | Student</h6>
<hr>
<p><?php echo $message;?></p>
 <form method="post" action="" id="Login" enctype='multipart/form-data'>

    
  <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Email Id</label>
    <input type="email" placeholder="Email Id" class="form-control email" name="login_email" id="email" value="">

  </div>
  
  <div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">Password</label>
    <input type="password" class="form-control" name="login_password" id="password" placeholder="Password">
    
  </div>
  <div class="form-group form-text text-muted">
 Not  a member just sign up from <a href="../login/sign-up.php">here !</a> or <a href="../forgot_password.php">Forgot Password ?</a>
  </div>
  <br>
  <button class="btn btn-primary w-100" type="submit" name="login">Login</button>

</form>
</div>
</div>

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
      setInterval(function(){
    const img=document.getElementById("img");
    const random=Math.floor(Math.random() * 1000);
    const img1=document.getElementById("img").setAttribute("src", "https://picsum.photos/400/400?random="+random+"")   ;
},2000)
  </body>
</html