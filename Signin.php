<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect('localhost', 'root', 'root', 'olex') or die("Connection Failed: " . mysqli_connect_error());
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user exists
    $checkQuery = "SELECT * FROM mst_acc WHERE username = '$username'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $count = mysqli_num_rows($checkResult);

    if ($count > 0) {
        // User exists, check password
        $userRow = mysqli_fetch_assoc($checkResult);
        $storedPassword = $userRow['password'];
        if ($password == $storedPassword) {
            // Password matches, redirect to Home.html
            
            $idImport = "SELECT id_user FROM mst_acc WHERE username = '$username'";
            $result = mysqli_query($conn, $idImport);

            if ($result) {
                // Fetch the row as an associative array
                $row = mysqli_fetch_assoc($result);
                $id_user = $row['id_user'];

                // echo "<script>alert('Id User = " . $id_user . "'); setTimeout(function(){ window.location.href = 'Signup.php'; }, 0);</script>";
            } else {
                echo "Error executing the query: " . mysqli_error($conn);
            }
            

            header('Location: Home.html');
            exit;
        } else {
            // Password doesn't match, display alert
            echo "<script>alert('Wrong password. Please try again.');</script>";
        }
    } else {
        // User doesn't exist, display alert and redirect to Signup.php
        echo "<script>alert('User does not exist. Please sign up.'); setTimeout(function(){ window.location.href = 'Signup.php'; }, 0);</script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <!-- Link Boostrap HTML, CSS, JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- Link Icon Boostrap -->
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
            <a href="Signup.php"><h4>Sign Up?</h4></a>
        </div>
    </nav>
    <!-- End Of Navbar Section -->

    <!-- Login Card -->
    <div class="card" style="width: 350px; height: 370px; margin: auto; margin-top: 20rem;">
        <div class="card-body" style="text-align: center">
            <h5 class="card-title" style="margin: 20px auto">SIGN IN</h5>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username"/>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password"/>
                </div>
                <button class="btn btn-primary btn-light" style="background-color: #e68122e8" type="submit">Sign In</button>
            </form>
        </div>
    </div>
    <!-- End Of Login Card -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
