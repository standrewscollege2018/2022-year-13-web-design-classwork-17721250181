<?php
  if(!isset($_POST['search'])) {
    header("Location: search.php");
  }
  $search = $_POST['search'];

  $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

  $result_qry = mysqli_query($dbconnect, $result_sql);

?>
<div class="row g-4 m-2">
<?php
  if(mysqli_num_rows($result_qry)==0) {
      echo "<h1 class='text-center my-5 display-1'>No results found</h1>";
    } else {
      $result_aa = mysqli_fetch_assoc($result_qry);

      do {
        $firstname = $result_aa['firstname'];
        $lastname = $result_aa['lastname'];
        $photo = $result_aa['photo'];
        ?>

        <div class='col-12 col-md-6 col-lg-4 col-xl-3 text-center'>
          <div class='card'>
            <img src="images/<?php echo $photo; ?>" class="card-img-top" alt="photo">
            <div class="card-body">
              <p class="card-text"><?php echo "$firstname $lastname"; ?></p>
            </div>
          </div>
        </div>
      <?php
        } while ($result_aa = mysqli_fetch_assoc($result_qry));


  }
 ?>
</div>
