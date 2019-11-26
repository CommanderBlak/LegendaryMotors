<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Legend Motorsport</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="imgs/car.png" type="image/gif" sizes="16x16">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="css/stylesheet.css">

  <!-- Body font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">

  <!-- jQuery-->
  <script src="js/all.js"></script>


</head>

<body>
  <!-- PreLoader-->

  <!-- End PreLoader-->

  <!-- nav Element-->
  <nav class="navbar navbar-default navbar-expand-lg px-3" id="navBar">
    <a class="navbar-brand" href="index.php">
      <img src="imgs/car.png" alt="logo">
    </a>
    <button type="button" class="navbar-toggler navbar-toggle-right" data-toggle="collapse" data-target="#myNav">
      <span class="navbar-toggler-icon">
        <i class="fas fa-bars"></i>
      </span>
    </button>

    <div class="collapse navbar-collapse show" id="myNav">
      <ul class="nav navbar navbar-nav mx-auto">
        <li class="nav-item active">
          <a href="index.php" class="nav-link">
            Home |
          </a>
        </li>
        <li class="nav-item active">
          <a href="about.html" class="nav-link">
            About Us |
          </a>
        </li>
        <li class="nav-item active">
          <a href="contact.html" class="nav-link">
            Contact Us |
          </a>
        </li>
        <li class="nav-item active">
          <a href="gallery.html" class="nav-link">
            Gallery |
          </a>
        </li>
        <li class="nav-item active">
          <a href="login.php" class="nav-link">
            Login |
          </a>
        </li>
        <li class="nav-item active">
          <a href="register.php" class="nav-link">
            User-Registration
          </a>
        </li>

      </ul>

      <!-- Social Media icons -->
      <div class="nav-icons d-none d-lg-block">
        <a href="#" class="nav-icon">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="#" class="nav-icon">
          <i class="fab fa-twitter"></i>
        </a><a href="#" class="nav-icon">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

    </div>

  </nav>
  <!-- End nav Element-->

  <!-- Header -->
  <header class="header" id="header">


    <div class="container-fluid">

      <div class="row height-max align-items-center">

        <div class="col col-md-9 ml-auto text-right pr-5">
          <!-- notification message -->
          <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
              <h3>
                <?php
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                ?>
              </h3>
            </div>

          <?php endif ?>

          <!-- logged in user information -->
          <?php  if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
          <?php endif ?>


          <h5 class="title-heading d-inline-block p-2 text-uppercase">The all new</h5>
          <h2 class="text-uppercase my-2 title">2019 Mercedes-benz</h2>
          <h2> Ksh. 6,000,000
            <a href="#" class="title-icon d-inline-block mx-2">
              <i class="fas fa-play"></i>

            </a>
          </h2>
          <h3 class="text-uppercase">A website for Mercedes Benz enthusiasts</h3>




        </div>
      </div>

    </div>

  </header>




  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
