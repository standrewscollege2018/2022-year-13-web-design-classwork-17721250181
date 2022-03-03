<?php

  include("dbconnect.php");
  if (!isset($_POST['firstname']) or !isset($_POST['lastname'])) {
    header("Location:index.php?page=addstudent");
  }
  else {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    // Check the length of the Code
      // Check is name/code already exist
    $mysqli_sql = "SELECT * FROM `tutorgroup` WHERE tutor='$tutorname' OR tutorcode='$tutorcode'";
    $mysqli_qry = mysqli_query($dbconnect, $mysqli_sql);
    if (mysqli_num_rows($mysqli_qry)!=0) {
      header("Location:index.php?page=addtutor&addtutorerror=You have put a tutor who is already exist.");
    }
    else {
      $mysqli_sql = "INSERT INTO tutorgroup (tutor, tutorcode) VALUES ('$tutorname', '$tutorcode')";
      echo $mysqli_query;
      mysqli_query($dbconnect, $mysqli_sql);
    }

  }

 ?>
