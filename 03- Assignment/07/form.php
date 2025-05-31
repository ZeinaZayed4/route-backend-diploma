<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';

?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Login</h4>
                    <form action="handle.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
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
