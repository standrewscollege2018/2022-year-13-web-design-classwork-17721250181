<?php
if(!isset($_GET['tutorgroupID'])) {
  header("Location: index.php");
} else {
  $tutorcode = $_GET['tutorcode'];
  $tutorgroupID = $_GET['tutorgroupID'];
  $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
  $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

  ?>

<div class="container-fluid bg-light">
  <div class="row">
    <div class="col-12 text-center my-5">
    <?php
  if(mysqli_num_rows($tutor_qry)==0) {
    echo "<p class='display-1'>No students in $tutorcode</p>";
  } else {
    $tutor_aa = mysqli_fetch_assoc($tutor_qry);
    echo "<h1 class='display-2'>$tutorcode</h1>";

    ?>
    </div>
  </div>
  <div class="row g-4 mx-2">
    <?php
    do {
      $firstname = $tutor_aa['firstname'];
      $lastname = $tutor_aa['lastname'];
      $photo = $tutor_aa['photo'];

      echo "<div class='col-12 col-md-6 col-lg-4 col-xl-3 text-center'>";
      echo "<div class='card>";
      echo "<img class='card-img-top' src='images/$photo' alt='img'>";
      echo "<div class='card-body'>";
      echo "<p class='card-text'>$firstname $lastname</p>";
      echo "</div></div></div>";

    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
  }
}
?>
  </div>
</div>
