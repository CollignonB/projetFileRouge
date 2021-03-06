<?php

include "template/nav.php";
include "template/header.php";

session_start();
if(empty($_SESSION["user"]) || !isset($_SESSION["user"])){
  header("location:connection.php");
}
?>

<main class="container">
    <div class="row mb-4">
      <div class="card col-3 ml-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <h6 class="card-subtitle mb-2 text-muted"></h6>
          <p class="card-text"></p>
        </div>
      </div>
      <div class="card col-3 ml-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <h6 class="card-subtitle mb-2 text-muted"></h6>
          <p class="card-text"></p>
        </div>
      </div>
      <div class="card col-3 ml-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <h6 class="card-subtitle mb-2 text-muted"></h6>
          <p class="card-text"></p>
        </div>
      </div>
    </div>

    <script src="js/articles.js"></script>

<?php 
include "template/footer.php";
?>