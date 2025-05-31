<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';

?>
<div class="container">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <input class="form-control" type="file" name="image" id="formFile">
        </div>
        <div class="mb-3">
            <input class="form-control" type="text" name="imgName" placeholder="Image name" aria-label="default input example">
        </div>
        <div class="col-auto">
            <button type="submit" name="submit" class="btn btn-light mb-3">Submit</button>
        </div>
    </form>
</div>
