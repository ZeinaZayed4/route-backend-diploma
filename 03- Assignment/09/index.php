<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';

$dir = 'uploads/';
$images = glob($dir . "*.{png,jpg,jpeg}", GLOB_BRACE);

if (isset($_POST['submit'])) {
	$imgName = trim(htmlspecialchars($_POST['imgName']));
	
	$image = $_FILES['image'];
	$tmp_name = $image['tmp_name'];
	$image_name = $image['name'];
	$extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
	$new_name = (empty($imgName)) ? uniqid() . ".$extension" : $imgName . ".$extension";
	$image_error = $image['error'];
	$image_size = $image['size'] / (1024 * 1024);
	$extension_types = ['png', 'jpg', 'jpeg'];
	
	$errors = [];
	if ($image_error != 0) {
		$errors[] = "Image uploaded isn't correct.";
	} elseif (!in_array($extension, $extension_types)) {
		$errors[] = "Image extension isn't provided.";
	} elseif ($image_size > 2) {
		$errors[] = "Image size must be less than 2MB.";
	}
	
	if (empty($errors)) {
		move_uploaded_file($tmp_name, "uploads/$new_name");
	} else {
		var_dump($errors);
	}
	
} else {
	header("Location: upload.php");
}

?>

<div class="container">
    <div style="display: flex; justify-content: center; align-items: flex-start; gap: 30px; flex-wrap: wrap;">
        <?php foreach ($images as $img): ?>
            <div style="text-align: center;">
                <img src="<?= $img ?>" class="rounded" alt="<?= $new_name ?>" style="height: 200px; width: 200px; object-fit: cover; display: block; margin: 0 auto;">
                <br>
                <a href="<?= $img ?>" download class="btn btn-light btn-sm">Download</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
