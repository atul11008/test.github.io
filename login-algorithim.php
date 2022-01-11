<?php

include ('../helpers/functions.php');
if(isset($_SESSION["type"]) ||isset($_COOKIE["user_id"]))
{
 header("location:../index.php");
}
$connect=mysqli_connect("localhost","root","","qsolver");

$message = '';
if(isset($_POST["login"]))
{
 if(empty($_POST["login_email"]) || empty($_POST["login_password"]))
 {
  $message = "<div class='p-1 m-0 font-ubuntu text-red-5'>Both Fields are required</div>";
 }
 else
 {
  $query = "SELECT  * from user_details ";
  $exe_q=mysqli_query($connect,$query);
  foreach ($exe_q as $row) {
		$iv=hex2bin($row['iv']);
    $iv1=$row['iv'];
		$dec_email=str_openssl_dec($row['user_email'],$iv);
        $user_status=$row["user_status"];
        $in_password=$row["user_password"];
        $user_id=$row["user_id"];
        $user_type=$row["user_type"];

   }
  /*$count = $statement->rowCount();
  if($count > 0)
  {*/
   if ($dec_email = $_POST["login_email"] ) {	
  
    if($user_status == 'Active')
    {
     if(password_verify($_POST["login_password"], $in_password))
     {

      $user_id=str_openssl_enc($user_id,$iv);
      $user_type=str_openssl_enc($user_status,$iv);
      

      setcookie('ghdfg',$iv1,time()+60*60*24*365*10,"/phpmysql/hit/");
      setcookie('user_id',$user_id,time()+60*60*24*365*10,"/phpmysql/hit/");
      setcookie('user_type',$user_type,time()+60*60*24*365*10,"/phpmysql/hit/");
      header("location: ../index.php");
     }
     else
     {
      $message = '<div class="p-1 m-0 font-ubuntu text-red-5">Wrong Password</div>';
     }
    }
    else
    {
     $message = '<div class="p-1 m-0 font-ubuntu text-red-5">Your Account has been disabled, please contact admin <a href="learn.php">Learn more<i class="fa fa-exclamation-circle"></i></a></div>';
    }
   }
   else
  {
   $message = "<div class='p-1 m-0 font-ubuntu text-red-5'>Wrong Email Address</div>";
  }
 }
}


?>