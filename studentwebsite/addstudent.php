<div class="container-fluid">
<?php
  // To know did error happened
  if (isset($_GET['addstudenterror'])) {
    // $tutorexisterror=$_GET['tutorexisterror'];
    ?>
    <div class="row mx-5 mt-4">
      <div class="col-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="bi bi-exclamation-triangle"></i>&nbsp
          <strong>Gosh!</strong>&nbsp<?php echo $_GET['addstudenterror']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
    <?php
  }
 ?>
  <div class="row my-4 mx-5">
    <div class="col-12">
      <form class="" action="enterstudent.php" method="post" enctype="multipart/form-data">
        <!-- Name -->
        <div class="input-group mb-3">
          <span class="input-group-text form-label">First and Last Name</label>
          <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="firstname" required>
          <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="lastname" required>
        </div>
        <!-- Tutorgroup -->
        <div class="mb-3">
          <label for="Tutorgroup" class="form-label">Sellect student's tutorgroup</label>
          <select name="tutorgroup" class="form-select" aria-label="select tutorgroup">
            <option value="NULL" selected disabled hidden>Select a tutorgroup</option>
            <?php
              $tutor_sql = "SELECT tutorgroupID,tutorcode FROM `tutorgroup` WHERE 1";
              $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
              $tutor_aa = mysqli_fetch_assoc($tutor_qry);
              do {
                $tutorgroupID = $tutor_aa['tutorgroupID'];
                $tutorcode = $tutor_aa['tutorcode'];

                echo "<option value='$tutorgroupID'>$tutorcode</option>";

                } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
             ?>
          </select>
        </div>
        <!-- Photo -->
        <div class="mb-3">
          <label for="photofile" class="form-label">Upload Photo</label>
          <input type="file" name="photo" class="form-control" id="photofile" aria-describedby="Photo Upload" required>
        </div>
        <!-- :) -->
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">I am a robot</label>
        </div>
        <!-- submit button -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
