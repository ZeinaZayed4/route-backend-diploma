<?php

include_once '../partials/header.php';
include_once '../partials/footer.php';

if (isset($_POST['submit'])) {
	$data = [
		"name" => trim(htmlspecialchars($_POST['name'])),
		"email" => trim(htmlspecialchars($_POST['email'])),
		"phone" => trim(htmlspecialchars($_POST['phone'])),
		"age" => trim(htmlspecialchars($_POST['age'])),
		"password" => password_hash(trim(htmlspecialchars($_POST['password'])), PASSWORD_DEFAULT)
	];
	?>
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="card shadow">
						<div class="card-header bg-secondary">
							<h4 class="mb-0 text-center">Data Information</h4>
						</div>
						<div class="card-body">
							<dl class="row mb-0">
								<?php
								foreach ($data as $key => $value) {
									echo "<dt class='col-sm-4'>" . ucfirst($key) . ":</dt>";
									echo "<dd class='col-sm-8'>" . $value . "</dd>";
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
