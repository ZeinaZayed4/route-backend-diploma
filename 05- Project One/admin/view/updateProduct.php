<?php

include '../view/header.php';

if (!isset($_SESSION['admin_login']) || !$_SESSION['admin_login']) {
    header("Location: ../../login.php");
    exit();
}

if (!isset($_GET['index'])) {
    header("Location: allProducts.php");
    exit();
}

$index = (int) $_GET['index'];

if (!isset($_SESSION['products'][$index])) {
	header("Location: allProducts.php");
	exit();
}

$product = $_SESSION['products'][$index];

include "../view/sidebar.php";
include "../view/navbar.php";

?>

    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Update Product</h3>
                        <?php include '../../partials/error_success.php'; ?>
                        <form method="post" action="../handle/handle-update-product.php?index=<?= $index ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="cat">Category</label>
                                <input type="text" name="cat" id="cat" class="form-control p_input" value="<?= $product['cat'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control p_input" value="<?= $product['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input type="text" name="desc" id="desc" class="form-control p_input" value="<?= $product['desc'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control p_input" value="<?= $product['price'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control p_input" value="<?= $product['quantity'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" name="img" id="img" class="form-control p_input">
                            </div>
                            <img src="../upload/<?= $product['img'] ?>" alt="<?= $product['title'] ?>" width="50px">
                            <div class="text-center">
                                <button type="submit" name="updateProduct" class="btn btn-primary btn-block enter-btn">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

<?php include "../view/footer.php"; ?>
