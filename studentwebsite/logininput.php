<div class="container-fluid">
  <?php
    // check session
    if (isset($_SESSION['permission'])) {
      ?>
      <div class="row mx-5 mt-4">
        <div class="col-12">
          <h1 class="text-center display-1">You have already loged in.</h1>
          <a href="home.php">Back to home</a>
        </div>
      </div>
      <?php
    }
    else {
    // To know did error happened
      if (isset($_GET['loginerror'])) {
        // $tutorexisterror=$_GET['tutorexisterror'];
        ?>
        <div class="row mx-5 mt-4">
          <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <i class="bi bi-exclamation-triangle"></i>&nbsp
              <strong>Gosh!</strong>&nbsp<?php echo $_GET['loginerror']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
      <div class="row mx-5 my-4">
        <div class="col-12">
          <form class="" action="loginchcek.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input name="username" type="text" class="form-control" id="username" aria-describedby="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">I am a robot</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <?php
    }
   ?>

</div>
