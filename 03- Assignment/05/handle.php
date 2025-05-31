<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';

if (isset($_POST['submit'])) {
	$product1 = [
		"name" => trim(htmlspecialchars($_POST['name1'])),
		"type" => trim(htmlspecialchars($_POST['type1'])),
		"price" => trim(htmlspecialchars($_POST['price1']))
	];
	
	$product2 = [
		"name" => trim(htmlspecialchars($_POST['name2'])),
		"type" => trim(htmlspecialchars($_POST['type2'])),
		"price" => trim(htmlspecialchars($_POST['price2'])),
        "offer" => trim(htmlspecialchars($_POST['offer']))
	]; ?>
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-lg-4 text-center">
					<div class="card shadow mb-4">
						<div class="card-header bg-secondary-bg text-black">
							<?php echo "<h4 class='mb-0'>Product 1 Data</h4>"; ?>
						</div>
						<div class="card-body">
							<dl class="row mb-0">
								<?php
								foreach ($product1 as $key => $value) {
									echo "<dt class='col-sm-3'>" . ucfirst($key) . ":</dt>";
									echo "<dd class='col-sm-9'>" . $value . "</dd>";
								}
								?>
							</dl>
						</div>
					</div>
					<div class="card shadow mb-4">
						<div class="card-header bg-secondary-bg text-black">
							<?php echo "<h4 class='mb-0'>Product 2 Data</h4>"; ?>
						</div>
						<div class="card-body">
							<dl class="row mb-0">
								<?php
								foreach ($product2 as $key => $value) {
									echo "<dt class='col-sm-3'>" . ucfirst($key) . ":</dt>";
									echo "<dd class='col-sm-9'>" . $value . "</dd>";
								}
								?>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
} else {
	header("Location: form.php");
}

