<?php
// include "config.php";
include "../model/loginModel.php";

if(isset($_POST['login']))
{
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  if($email != null && $password != null)
  {



    $status = login ($email,$password);
    if($status=='admin')
    {       
         session_start();
         $_SESSION['email']=$email;
         header('location: ../view/adminDashbroad.php');
    }
    else if($status=='user')
    {

      session_start();
      $_SESSION['email']=$email;
      header('location: ../view/clientProfile.php');

    }

    else{
      header('location: ../../view/login.php');

    }

  }
  else
  {
    echo "null submission ....";
  }
}
else{
  echo "Enter username name and password 1st";
}


?>