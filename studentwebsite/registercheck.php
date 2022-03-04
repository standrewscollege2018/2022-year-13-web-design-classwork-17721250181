<?php
  include("dbconnect.php");

  if (!isset($_POST['username']) or !isset($_POST['password'])) {
    header("Location:registerinput.php?registererror=Please enter username and/or password");
  }
  else{
    // get the username and password
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password_hash=password_hash($password,PASSWORD_DEFAULT);

    // Get username and hashed password from database
    $user_sql = "SELECT username FROM `user` WHERE username='$username'";
    $user_qry = mysqli_query($dbconnect, $user_sql);
    // Check if the username exists or not
    if (mysqli_num_rows($user_qry)!=0) {
      header("Location:registerinput.php?registererror=Username already exist.");
    }
    else {
      $user_sql = "INSERT INTO user (username, password) VALUES ('$username', '$password_hash')";
      $user_qry = mysqli_query($dbconnect, $user_sql);
    }
  }

 ?>
