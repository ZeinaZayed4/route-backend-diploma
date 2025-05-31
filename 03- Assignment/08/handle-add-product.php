<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';
include_once "../02.php";

if (isset($_POST['submit'])) {
	trim(htmlspecialchars(extract($_POST)));
	
	$errors = [];
	// name
	if (empty($name)) {
		$errors[] = "Name is required.";
	} elseif (!is_string($name)) {
		$errors[] = "Name must be a string.";
	} elseif (strlen($name) < 5 || strlen($name) > 255) {
		$errors[] = "Name must be more than 5 characters and less than 255 characters.";
	}
	
	// description
	if (!is_string($description)) {
		$errors[] = "Description must be a string.";
	}
	
	// price
	if (empty($price)) {
		$errors[] = "Price is required.";
	} elseif (!is_numeric($price)) {
		$errors[] = "Price must be a number.";
	} elseif ($price < 0) {
		$errors[] = "Price must be greater than or equal to ZERO.";
	}
	
	if (empty($errors)) { ?>
		<div class="row mb-5 mt-5">
			<div class="col-12">
				<div class="d-flex justify-content-center">
					<div class="card shadow-sm" style="width: 400px;">
						<div class="card-header text-center">
							<h4 class="mb-0">Product Details</h4>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<strong>Name:</strong>
								<span><?= $name ?></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<strong>Description:</strong>
								<br><small><?= (empty($description)) ? "No description!" : $description; ?></small>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<strong>Original Price:</strong>
								<span class=" text-muted"><?= number_format($price) ?></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<strong>Price After Discount:</strong>
								<span class="text-success fw-bold"><?= number_format(getPriceWithDiscount($price)); ?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	else {
		var_dump($errors);
	}
} else {
	header("Location: add-product.php");
}
?>
