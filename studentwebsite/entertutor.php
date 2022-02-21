<?php

  include("dbconnect.php");
  if (!isset($_POST['tutorname']) or !isset($_POST['tutorcode'])) {
    header("Location:index.php?page=addtutor");
  }
  $tutorname=$_POST['tutorname'];
  $tutorcode=$_POST['tutorcode'];

  $mysqli_query = "INSERT INTO tutorgroup (tutor, tutorcode) VALUES ('$tutorname', '$tutorcode')";
  mysqli_query($dbconncet, $mysqli_query);
 ?>
