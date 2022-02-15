<?php

$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);
 ?>
 <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:#003155">
   <div class="container-fluid">
     <a class="navbar-brand text-center" href="index.php"><h1>St Andrew's College</h1></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
             <h4>Tutor groups</h4>
           </a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

             <?php
              do {
                $tutorgroupID = $tutor_aa['tutorgroupID'];
                $tutorcode = $tutor_aa['tutorcode'];

                echo "<li><a class='dropdown-item' href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a></li>";

                } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
            ?>
          </ul>
        </li>
      </ul>
        <h2>Search for student</h2>
        <form class="" action="index.php?page=searchresults" method="post">
          <input required type="text" name="search" placeholder="Student name">
          <button type="submit" name="button">Search</button>
        </form>
      </div>
    </div>
  </nav>
