<?php

include 'partials/header.php';

if (isset($_POST['addToCart'])) {
    $index = $_POST['index'];
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    if (in_array($index, $_SESSION['cart'])) {
		$_SESSION['errors'][] = "Product already in cart!";
    } else {
		$_SESSION['cart'][] = $index;
		$_SESSION['success'] = "Added to cart!";
    }
}

?>

<!-- Start Hero -->
<section id="page-header">
    <h2>Super value deals</h2>
    <p>Save more with coupons & up to 70% off!</p>
</section>
<!-- End Hero -->

<!-- Start New Arrival or productCard Features -->
<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <?php include 'partials/error_success.php'; ?>
    <div class="pro-container">
        <?php
        if (!empty($_SESSION['products'])):
        foreach ($_SESSION['products'] as $index => $product): ?>
            <div class="pro" onclick="window.location.href='product.html'">
                <img src="admin/upload/<?= $product['img'] ?>" alt="<?= $product['img'] ?>">
                <div class="des">
                    <span><?= $product['cat'] ?></span>
                    <h5><?= $product['title'] ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?= $product['price'] ?></h4>
                    <form action="shop.php" method="post">
                        <input type="hidden" name="index" value="<?= $index; ?>">
                        <button class="cart" name="addToCart"><i class="fas fa-shopping-cart"></i></button>
                    </form>
                </div>
            </div>
        <?php endforeach; endif;?>
    </div>
</section>

<section id="pagenation" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail Updates about our latest shop and <span class="text-warning">Special Offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Enter Your E-mail...">
        <button class="normal ">Sign Up</button>
    </div>
</section>

<?php include 'partials/footer.php'; ?>

