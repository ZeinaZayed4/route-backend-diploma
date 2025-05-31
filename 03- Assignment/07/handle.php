<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';

$emailStatic = "zeina@gmail.com";
$passwordStatic = "123456";

if (isset($_POST['submit'])) {
	trim(htmlspecialchars(extract($_POST)));
	
	if ($email === $emailStatic && $password === $passwordStatic) { ?>
		<div class="container mt-5">
			<div class="alert alert-success text-center mb-4" role="alert">
				<?php echo "Welcome $email!"; ?>
			</div>
		</div>
	<?php
	} else { ?>
		<div class="container mt-5">
			<div class="alert alert-danger text-center mb-4" role="alert">
				<?php echo "Data doesn't match!"; ?>
			</div>
		</div>
	<?php
	}
} else {
	header("Location: form.php");
}

