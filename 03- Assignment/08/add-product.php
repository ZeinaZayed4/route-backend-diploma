<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';

?>

<div class="container mt-3">
    <form action="handle-add-product.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControl" class="form-label">Product Name</label>
            <input class="form-control" type="text" name="name" id="exampleFormControl" placeholder="Name" aria-label="default input example">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlNumber" class="form-label">Product Price</label>
            <input type="number" name="price" id="exampleFormControlNumber" class="form-control" aria-label="Amount (to the nearest dollar)">
        </div>
        <div class="col-auto">
            <button type="submit" name="submit" class="btn btn-light mb-3">Submit</button>
        </div>
    </form>
</div>
