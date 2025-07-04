<?php

session_start();

$script_name = explode('/', $_SERVER['SCRIPT_NAME']);
$script_name = end($script_name);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start Links -->
    <link rel="stylesheet" href="css/splide.min.css">
    <link rel="stylesheet" href="css/splide-core.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Start Home Style -->
    <link rel="stylesheet" href="css/index_style.css">
    <!-- End Home Style -->

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,400&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- End Links -->

    <title>Haga Helwa</title>
</head>

<body>

<!-- Start header -->
<section id="header">
    <a href="index.php">
        <img src="img/logo.png" alt="homeLogo">
    </a>
    <div>
        <ul id="navbar">
            <li class="link">
                <a class="<?php if ($script_name === "index.php" || $script_name === '') echo 'active' ?>" href="index.php">Home</a>
            </li>
            <li class="link">
                <a class="<?= $script_name === "shop.php" ? 'active' : '' ?>" href="shop.php">Shop</a>
            </li>
            <li class="link">
                <a class="<?= $script_name === "blog.php" ? 'active' : '' ?>" href="blog.php">Blog</a>
            </li>
            <li class="link">
                <a class="<?= $script_name === "about.php" ? 'active' : '' ?>" href="about.php">About</a>
            </li>
            <li class="link">
                <a class="<?= $script_name === "contact.php" ? 'active' : '' ?>" href="contact.php">Contact</a>
            </li>
            
            <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
                <li class="link">
                    <a href="logout.php">Logout</a>
                </li>
                <li class="link">
                    <a class="<?= $script_name === "cart.php" ? 'active' : '' ?>" id="lg-cart" href="cart.php">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
            <?php else: ?>
                <li class="link">
                    <a class="<?= $script_name === "signup.php" ? 'active' : '' ?>" href="signup.php">Signup</a>
                </li>
                <li class="link">
                    <a class="<?= $script_name === "login.php" ? 'active' : '' ?>" href="login.php">Login</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php">
            <i class="fas fa-shopping-cart"></i>
        </a>
        <a href="#" id="bar">
            <i class="fas fa-outdent"></i>
        </a>
    </div>
</section>
<!-- End header -->
