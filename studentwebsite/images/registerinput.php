<div class="container-fluid">
  <?php
      if (isset($_GET['registererror'])) {
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
            <h1 class="display-4">Register</h1>
        </div>
        <div class="col-12">
          <form class="" action="registercheck.php" method="post">
            <div class="mb-3">
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
