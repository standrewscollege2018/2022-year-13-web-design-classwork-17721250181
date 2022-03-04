<?php
  include("dbconnect.php");

  if (!isset($_POST['username']) or !isset($_POST['password'])) {
    header("Location:logininput.php?loginerror=Please enter username and/or password");
  }
  else{
    // get the username and password
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password_hash=password_hash($password,PASSWORD_DEFAULT);

    // Get username and hashed password from database
    $user_sql = "SELECT username,password,permission FROM `user` WHERE username='$username'";
    $user_qry = mysqli_query($dbconnect, $user_sql);
    // Check if the username exists or not
    if (mysqli_num_rows($user_qry)==0) {
      header("Location:logininput.php?loginerror=Username does not exist.");
    }
    else {
      $user_aa = mysqli_fetch_assoc($user_qry);
      // password check
      if ($password_hash!=$user_aa['password']) {
        header("Location:logininput.php?loginerror=Password is incorrect");
      }
      else {
        session_start();
        $_SESSION['permission']=$user_aa['permission'];
        echo "Login successful as $username";
      }
    }




  }

 ?>
