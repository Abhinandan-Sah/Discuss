<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid t  mx-5 d-flex gap-5 align-items-center">
    <a href="#"><img src="./public/logo.png" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex align-items-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active h5" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5" href="#">Latest Questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5" href="?category=true">Category</a>
        </li>

        <!-- If user is logged in, show logout button -->
        <?php
        if(isset($_SESSION['user']['username'])){ ?>
        <li class="nav-item">
          <a class="nav-link h5" href="?ask=true" tabindex="-1" aria-disabled="true">Ask a Questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5" href="./server/requests.php?logout=true" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
        <?php } ?>

        <!-- If user is not logged in, show login button -->
        <?php
        if(!isset($_SESSION['user']['username'])){ ?>
        <li class="nav-item">
          <a class="nav-link h5" href="?login=true" tabindex="-1" aria-disabled="true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5" href="?signup=true" tabindex="-1" aria-disabled="true">SignUp</a>
        </li>
        <?php } ?>

       
      </ul>
    </div>
  </div>
</nav>