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
  <link rel="stylesheet" href="css/styles.css">


  <!-- Body font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">

  <!-- jQuery-->
  <script src="js/all.js"></script>


</head>

<body>
  <!-- PreLoader-->
  <!-- End PreLoader-->

  <!-- nav Element-->
  <nav class="navbar navbar-inverse navbar-expand-lg px-3" id="navBar">
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
  <!-- Contact Form -->

  <div class="container bg-2 text-center" id="contact">
    <h1>Register</h1>

    <h2></h2>
    <hr>

    <form method="post" action="register.php">
    	<?php include('errors.php'); ?>
    	<div class="input-group">
    	  <label>Username</label>
    	  <input type="text" name="username" value="<?php echo $username; ?>">
    	</div>
    	<div class="input-group">
    	  <label>Email</label>
    	  <input type="email" name="email" value="<?php echo $email; ?>">
    	</div>
    	<div class="input-group">
    	  <label>Password</label>
    	  <input type="password" name="password_1">
    	</div>
    	<div class="input-group">
    	  <label>Confirm password</label>
    	  <input type="password" name="password_2">
    	</div>
    	<div class="input-group">
    	  <button type="submit" class="btn-success" name="reg_user">Register</button>
    	</div>
    	<p>
    		Already a member? <a href="login.php">Sign in</a>
    	</p>
    </form>

  </div>




  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>


  <!-- <div class="header">
  	<h2>Register</h2>
  </div>


</body>
</html>
