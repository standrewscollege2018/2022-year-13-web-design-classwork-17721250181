<?php
  include("dbconnect.php")

  if (!isset($_POST['username']) or !isset($_POST['password'])) {
    header("Location:logininput.php?loginerror=Pleaer enteer username and/or password")
  }
  else{
    
  }

 ?>
