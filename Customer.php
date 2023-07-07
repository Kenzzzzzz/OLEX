<?php
// Fetch category data from the database
$conn = mysqli_connect('localhost', 'root', 'root', 'olex') or die("Connection Failed: " . mysqli_connect_error());
$categoryQuery = "SELECT * FROM mst_barang";
$categoryResult = mysqli_query($conn, $categoryQuery);
$categoryCount = mysqli_num_rows($categoryResult);
?>

<!-- ! untuk default command html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Olex-Customer</title>
    
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
    <Nav>
        <div class="container nav_container">
        <a class="navbar-brand" href="Customer.php"><h2><i class="fa fa-cart-plus" aria-hidden="true"></i> OLEX - CUSTOMER </h2></a>    
        <h3><i class="fa-solid fa-magnifying-glass"></i></h3><h3><input type="search" id="search" name="search"></h3>
            <ul class="nav_menu">
                <li><a href="Chat.php"><h3><i class="fa-sharp fa-regular fa-comments"></i></h3></a></li>
                <li><a href="Cart.php"><h3><i class="fa fa-cart-plus" aria-hidden="true"></i></h3></a></li>
                <li><a href="Profile.php"><h3><i class="fa-sharp fa-regular fa-user"></i></h3></a></li>
                <li><a href="Home.html"><h3><i class="fa fa-sign-out" aria-hidden="true"></i></h3>
            </ul>
            <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </Nav>

<!-- Categories Section -->
<section class="categories">
        <div class="container categories_container">
            <div class="categories_right">
                <?php
                if ($categoryCount > 0) {
                    while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                        $categoryIcon = $categoryRow['icon'];
                        $categoryName = $categoryRow['name'];
                        $categoryDescription = $categoryRow['description'];
                        ?>
                        <article class="category">
                            <span class="category_icon"><i class="<?php echo $categoryIcon; ?>"></i></span>
                            <h5><?php echo $categoryName; ?></h5>
                            <p><?php echo $categoryDescription; ?></p>
                        </article>
                        <?php
                    }
                } else {
                    echo "<p>No categories found.</p>";
                }
                ?>
            </div>
        </div>
    </section>

<!--Footer-->
<footer>
    <div class="container footer_container">

        <div class="footer_1">
            <a href="index.html" class="footer_logo"><h4>Olex</h4></a>
            <p>
            Olex is a platform for selling used goods that are no longer used. Find the item you want only at OLEX
            </p>
        </div>

        <div class="footer_2">
            <h4>Permalinks</h4>
            <ul class="permalinks">
            <li><a href="Chat.php"><i class="fa-sharp fa-regular fa-comments"></i> Chat</a></li>
            <li><a href="Cart.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart</a></li>
            <li><a href="Profile.html"><i class="fa-sharp fa-regular fa-user"></i> Profile</a></li>
            </ul>
        </div>

        <div class="footer_3">
            <h4>Contact Us</h4>
            <div>
                <p>+62 821 1197 6636</p>
                <p>olexconnect@gmail.com</p>
            </div>

            <ul class="footer_socials">
                <li>
                    <a href="#">
                        <i class="fa-brands fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-instagram-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-twitter-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>   

<!-- Conector JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        breakpoints: {
            600: {
                slidesPerView: 2
            },
            300: {
                slidesPerView: 1
            }
        },
    });
    </script>

</body>
</html>