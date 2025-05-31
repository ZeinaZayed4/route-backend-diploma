<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-body">
                    <form action="handle.php" method="post">
                        <div class="mb-4">
                            <h5 class="text-black mb-3 text-center">Product 1</h5>
                            <div class="mb-3">
                                <label for="name1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name1" name="name1" placeholder="Product name">
                            </div>
                            <div class="mb-3">
                                <label for="type1" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type1" name="type1" placeholder="Product type">
                            </div>
                            <div class="mb-3">
                                <label for="price1" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price1" name="price1" placeholder="0">
                            </div>
                        </div>

                        <hr class="my-4">
                        
                        <div class="mb-4">
                            <h5 class="text-black mb-3 text-center">Product 2</h5>
                            <div class="mb-3">
                                <label for="name2" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name2" name="name2" placeholder="Product name">
                            </div>
                            <div class="mb-3">
                                <label for="type2" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type2" name="type2" placeholder="Product type">
                            </div>
                            <div class="mb-3">
                                <label for="price2" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price2" name="price2" placeholder="0">
                            </div>
                            <div class="mb-3">
                                <label for="offer" class="form-label">Offer</label>
                                <input type="text" class="form-control" id="offer" name="offer" placeholder="Special offer (optional)">
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-light text-black">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
