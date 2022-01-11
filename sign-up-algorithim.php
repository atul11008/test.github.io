<?php
   
    require('../database_connection.php');
    include ('../helpers/functions.php');
    if(isset($_POST["sign_up"])){
    // When form submitted, insert values into the database.
       $iv=openssl_random_pseudo_bytes(16);
       //getting the input values 
       $first_name=$_POST['first_name'];
       $last_name=$_POST['last_name'];
       $user_email=$_POST['user_email'];
       $sanitize_str = filter_var($user_email, FILTER_SANITIZE_STRING);
       $phone_number=$_POST['phone_number'];
       //$learning_language=mysqli_real_escape_string($connect,$_POST['learning_language']);
       $user_password=$_POST['user_password'];
       $sanitize_str = filter_var($user_password, FILTER_SANITIZE_STRING);
       $user_address=$_POST['user_address'];
       $user_type="user";
       $user_status="Active"; 
       $user_password=password_hash($user_password, PASSWORD_ARGON2ID,['memory_cost'=>1024,'threads'=>2,'time'=>2,]);

       
       //encrypting the input values 
       $first_name=str_openssl_enc($first_name,$iv);
       $last_name=str_openssl_enc($last_name,$iv);
       $user_email=str_openssl_enc($user_email,$iv);
       $phone_number=str_openssl_enc($phone_number,$iv);
      //$learning_language=str_openssl_enc($learning_language,$iv);
       $user_address=str_openssl_enc($user_address,$iv);
       $user_type=str_openssl_enc("user",$iv);
       $user_status=str_openssl_enc("Active",$iv);
       $iv=bin2hex($iv);
       // Encryption of input values ends here
       /*$user_data = array();
       $user_data["user_type"]=$user_type;*/

      
        $query1="SELECT*FROM  user_details WHERE first_name=:first_name AND user_email=:user_email";
        $statement = $connect->prepare($query1);
        $statement->execute(
        array(
         ':first_name' => $first_name,
         ':user_email' => $user_email,
            )
                           );
         $count = $statement->rowCount();
        if ($count>0) {
        $msg_email_a_exsist='<small class="form-text text-muted d-block">The email that you entered already exist please use another one </small><br>';
        return false;
        }
        else{

        $query    = "INSERT INTO `user_details` (first_name,last_name,user_email,user_password,user_type,user_status,user_address,phone_number,user_profile,iv)
                     VALUES (:first_name,:last_name, :user_email,:user_password,:user_type,:user_status,:user_address,:phone_number,:user_profile,:iv)";
                     $stmt = $connect->prepare($query);
        $stmt->execute(
        array(
         ':first_name' => $first_name,
         ':last_name' => $last_name,
         ':user_email' => $user_email,
         ':user_password' => $user_password,
         ':user_type' => "user",
         ':user_status' => "Active",
         ':user_address'=> $user_address,
         ':phone_number'=> $phone_number,
         ':user_profile' => "./assets/images/beard.png",
         ':iv'=>$iv
              )
              );

       $result = $stmt->fetchAll();

       if($stmt){
        $random_num1=rand(999999,999999999);
        $random_num2=rand(100000,999999999);
        $random_num3=rand(100000,999999999);
        $random_num4=rand(1000000,99999999999);
        $random_num5=rand(10000000,999999999999);
         header("location:../choose-plan.php?client_id=".$random_num1." & choose_id=".$random_num2."& hjaks=".$random_num3." & eriso=".$random_num4." & rguiko=".$random_num5."");
       }

  /*      if ($stmt) {
  
  $query = "
  SELECT * FROM user_details WHERE user_email = :user_email
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':user_email' => $user_email
   )
  );
 
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if($row["user_status"] == 'Active')
    {
      setcookie('uid',$row["user_id"],time()+60*60*24*365*10,"/phpmysql/hit/");
      setcookie('utype',$row["user_type"],time()+60*60*24*365*10,"/phpmysql/hit/");
      echo "you are successfully logined !";
    }
    else
    {
     $message = '<div class="p-1 m-0 font-ubuntu text-red-5">Your Account has been disabled, please contact admin <a href="learn.php">Learn more<i class="fa fa-exclamation-circle"></i></a></div>';
     echo $message;
    }
   }
  }
  
    }
*/
    }
}
  
?>