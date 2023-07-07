<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <!-- Link Bootstrap HTML, CSS, JS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!-- Link Icon Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <!-- Connector CSS -->
  <link rel="stylesheet" href="assets/css/Signup_Signin.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

  <!-- Connect Font Awesome -->
  <script src="https://kit.fontawesome.com/bf6353e8d3.js" crossorigin="anonymous"></script>

  <!-- Import Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Navbar Section -->
  <nav>
    <div class="container nav_container">
      <a class="navbar-brand" href="index.html"><h2><i class="fa fa-cart-plus" aria-hidden="true"></i> OLEX</h2></a>
      <a href="Signin.php"><h4>Sign In?</h4></a>
    </div>
  </nav>
  <!-- End Of Navbar Section -->

  <!-- Signup Card -->
  <div class="card" style="width: 350px; height: 370px; margin: auto; margin-top: 20rem;">
    <div class="card-body" style="text-align: center">
      <h5 class="card-title" style="margin: 20px auto">SIGN UP</h5>

      <form action="Connect.php" method="POST">
        <div class="input-group mb-3">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" placeholder="Username" id="username" name="username" required />
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required />
        </div>

        <button class="btn btn-primary btn-light" style="background-color: #e68122e8" type="submit" name='submit'><a href=Signin.php>Sign Up</a></button>
      </form>
    </div>
  </div>
  <!-- End Of Signup Card -->

  <!-- Script Boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!-- End Of Script Boostrap -->

<!-- Script -->
  <script src="assets/js/Script.js"></script>
<!-- End Of Script -->
</body>
</html>