<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chess Board</title>
</head>
<body>
	<table style="border-collapse: collapse; border: 2px solid black;">
		<?php
		for ($row = 1; $row <= 8; $row++) {
			echo '<tr>';
			for ($col = 1; $col <= 8; $col++) {
				if (($row + $col) % 2 == 0) {
					echo '<td style="width: 50px; height: 50px; background-color: white; border: 1px solid black;"></td>';
				} else {
					echo '<td style="width: 50px; height: 50px; background-color: black; border: 1px solid white;"></td>';
				}
			}
			echo '</tr>';
		}
		?>
	</table>
</body>
</html>
