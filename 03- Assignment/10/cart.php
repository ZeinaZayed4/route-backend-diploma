<?php

session_start();

include_once '../partials/header.php';
include_once '../partials/footer.php';

if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}

?>

<div class="container mt-5">
    <h1 class="mb-4">Cart Items</h1>
	<?php if (empty($_SESSION['cart'])): ?>
        <div class="alert alert-danger" role="alert">
            Your cart is empty.
        </div>
	<?php else: ?>
        <ul class="list-group mb-4">
			<?php foreach ($_SESSION['cart'] as $product_name): ?>
                <li class="list-group-item mt-2"><?= $product_name ?></li>
			<?php endforeach; ?>
        </ul>
	<?php endif; ?>
    <a href="products.php" class="btn btn-light">Back to Products</a>
</div>

<!--<div class="container mt-5">-->
<!--	<h1>Cart Items</h1>-->
<!--	--><?php //if (empty($_SESSION['cart'])): ?>
<!--		<p>Your cart is empty.</p>-->
<!--	--><?php //else: ?>
<!--		<ul>-->
<!--			--><?php //foreach ($_SESSION['cart'] as $product_name): ?>
<!--				<li>--><?php //= $product_name ?><!--</li>-->
<!--			--><?php //endforeach; ?>
<!--		</ul>-->
<!--	--><?php //endif; ?>
<!--	<a href="products.php">Back to Products</a>-->
<!--</div>-->
