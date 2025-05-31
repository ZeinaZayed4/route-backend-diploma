<?php

include_once 'partials/header.php';
include_once 'partials/footer.php';

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
			<?php
			if (isset($_GET['submit'])) {
				trim(htmlspecialchars(extract($_GET)));
				
				echo '<div class="alert alert-success mb-4" role="alert">';
				echo '<h5 class="alert-heading text-center">Product Details</h5>';
				echo '<hr>';
				echo '<p class="mb-1 text-center"><strong>Name:</strong> ' . $name . '</p>';
				echo '<p class="mb-1 text-center"><strong>Type:</strong> ' . $type . '</p>';
				echo '<p class="mb-0 text-center"><strong>Price:</strong> ' . $price . '</p>';
				echo '</div>';
			}
			?>

            <div class="card shadow">
                <div class="card-header bg-secondary-bg text-black">
                    <h4 class="mb-0 text-center">Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="" method="get">
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Product Type</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Enter product type">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="price" name="price" placeholder="0">
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-light">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
