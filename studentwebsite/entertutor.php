<?php

  include("dbconnect.php");
  if (!isset($_POST['tutorname']) or !isset($_POST['tutorcode'])) {
    header("Location:index.php?page=addtutor");
  }
  else {
    $tutorname=$_POST['tutorname'];
    $tutorcode=strtoupper($_POST['tutorcode']);
    // Check is name/code already exist
    $mysqli_sql = "SELECT * FROM `tutorgroup` WHERE tutor='$tutorname' OR tutorcode='$tutorcode'";
    $mysqli_qry = mysqli_query($dbconnect, $mysqli_sql);
    if (mysqli_num_rows($mysqli_qry)!=0) {
      header("Location:index.php?page=addtutor&tutorexisterror=1");
    }
    else {
      $mysqli_sql = "INSERT INTO tutorgroup (tutor, tutorcode) VALUES ('$tutorname', '$tutorcode')";
      echo $mysqli_query;
      mysqli_query($dbconnect, $mysqli_sql);
    }
  }

 ?>
