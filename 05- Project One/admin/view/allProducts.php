<?php

include '../view/header.php';

if (!isset($_SESSION['admin_login']) || !$_SESSION['admin_login']) {
	header("Location: ../../login.php");
	exit();
}

include '../view/sidebar.php';
include '../view/navbar.php';

?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">All Products</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
						<?php include '../../partials/error_success.php'; ?>
						
						<?php if (!empty($_SESSION['products'])): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
									$counter = 1;
									foreach ($_SESSION['products'] as $index => $product):
										?>
                                        <tr>
                                            <th scope="row"><?= $counter++; ?></th>
                                            <td><?= $product['cat'] ?></td>
                                            <td><?= $product['title'] ?></td>
                                            <td>$<?= $product['price'] ?></td>
                                            <td>
                                                <img src="../upload/<?= $product['img'] ?>"
                                                     width="50px" height="50px"
                                                     alt="<?= $product['title'] ?>"
                                                     class="img-thumbnail">
                                            </td>
                                            <td>
                                                <a href="updateProduct.php?index=<?= $index; ?>" class="btn btn-primary">
                                                    Update
                                                </a>
                                                <a href="../handle/handle-delete-product.php?index=<?= $index; ?>" class="btn btn-danger">
                                                   Delete
                                                </a>
                                            </td>
                                        </tr>
									<?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
						<?php else: ?>
                            <div class="text-center mt-5">
                                <h3 class="text-muted">No products found!</h3>
                                <a href="addProduct.php" class="btn btn-primary mt-2">
                                    Add Product
                                </a>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php include '../view/footer.php'; ?>
</div>