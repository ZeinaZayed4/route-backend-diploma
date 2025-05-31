<?php

session_start();

include_once '../partials/header.php';
include_once '../partials/footer.php';

if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}

if (isset($_POST['submit'])) {
	$product_name = $_POST['product_name'];
	if (!in_array($product_name, $_SESSION['cart'])) {
		$_SESSION['cart'][] = $product_name;
	}
}

$products = [
	[
		'image' => 'laptop.jpg',
		'name' => 'Laptop 1',
		'price' => 25000
	],
	[
		'image' => 'laptop_2.jpg',
		'name' => 'Laptop 2',
		'price' => 30000
	],
	[
		'image' => 'laptop_3.jpg',
		'name' => 'Laptop 3',
		'price' => 35000
	]
];
?>

<div class="container mt-5">
    <div class="row g-4">
        <?php foreach ($products as $product): ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card h-100">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"><?= $product['name'] ?></h4>
                        <p class="card-text fw-bold text-success fs-5"><?= number_format($product['price']) ?></p>
                        <form method="post">
                            <input type="hidden" name="product_name" value="<?= $product['name'] ?>">
                            <button type="submit" name="submit" class="btn btn-light">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="mt-2">
        <a href="cart.php" class="btn btn-light">Go to Cart</a>
    </div>
</div>
