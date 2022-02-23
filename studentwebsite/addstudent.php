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
          <strong>Gosh!</strong>&nbsp<?php echo $_GET['addstudentrerror']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
    <?php
  }
 ?>
  <div class="row my-4 mx-5">
    <div class="col-12">
      <form class="" action="enterstudent.php" method="post">
        <div class="mb-3">
          <label for="firstname" class="form-label">First Name</label>
          <input name="firstrname" type="text" class="form-control" id="firstname" aria-describedby="firstname" required>
        </div>
        <div class="mb-3">
          <label for="lastname" class="form-label">Last Name</label>
          <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="lastname" required>
        </div>
        <!-- Tutorgroup -->
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <!-- Photo -->
        <div class="mb-3">

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
