<?php

  include("dbconnect.php");
  if (!isset($_POST['firstname']) or !isset($_POST['lastname']) or !isset($_POST['tutorgroup']) or !isset($_POST['photo'])) {
    header("Location:index.php?page=addstudent?addstudenterror=Something is not completeed");
  }
  else {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $tutorgroup=$_POST['tutorgroup'];
    $photoname=basename( $_FILES["photo"]["name"]);
    // $mysqli_sql = "SELECT * FROM `stduent` WHERE photo='$photoname'";
    // $mysqli_qry = mysqli_query($dbconnect, $mysqli_sql);
    // ISSUE: if the form is edited via deverloper tool and the tutor code can become any thing which may not fit the database.
    $mysqli_sql = "INSERT INTO student (firstname, lastname, tutorgroupID, photo) VALUES ('$firstname', '$lasetname','$tutorgroup','$photoname')";
    mysqli_query($dbconnect, $mysqli_sql);
    // Upload photo
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {

            echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
    }

  }

 ?>
