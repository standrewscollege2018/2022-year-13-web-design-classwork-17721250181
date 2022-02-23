<div class="container-fluid">
<?php
  // To know did error happened
  if (isset($_GET['tutorexisterror'])) {
    // $tutorexisterror=$_GET['tutorexisterror'];
    ?>
    <div class="row mx-5 mt-4">
      <div class="col-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="bi bi-exclamation-triangle"></i>
          <strong>Gosh!</strong> You have put a tutor who is already exist.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
    <?php
  }
 ?>
  <div class="row my-4 mx-5">
    <div class="col-12">
      <form class="" action="entertutor.php" method="post">
        <div class="mb-3">
          <label for="tutorname" class="form-label">Tutor Name</label>
          <input name="tutorname" type="text" class="form-control" id="tutorname" aria-describedby="tutorname" required>
        </div>
        <div class="mb-3">
          <label for="tutorcode" class="form-label">Tutor Code</label>
          <input name="tutorcode" type="text" class="form-control" id="tutorcode" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">I am a robot</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
