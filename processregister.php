<?php
require-once('connection.php');
  ifisset($_POST['signUp']){


    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpass=$_POST['cpassword'];

    $passHash=md5($password);

    $sqlUsername= mysqli_query($conn,"SELECT *FROM account WHERE username ='$username'");
    $checkUsername=mysqli_num_rows($sqlUsername);

    $sqlEmail=mysqli_query($conn"SELECT *FROM account WHERE email= '$email'");
    $checkEmail=mysqli-num-rows($sqlEmail);

    if ($checkusername !=0){
      $msg="Username already exist";
    }
    else if($checkemail != 0){
      $msg="email already in use.please try a diffrent email address";
    }
    //password confirmation
    else if($password !=$cpass){
      $msg="passwords do not match";
    }
    else{
      //create insert query
      $sql=mysqli_query($conn,"INSERT INTO account (username,email,password) 
      VALUES ('$username','$email','$passHash')");

      if($sql)
      {
        $msg="data submitted successfuly"
      }
      else{
        $msg='Error';
      }
    }

  


















  }




?>