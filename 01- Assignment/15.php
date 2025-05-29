<?php

$x = 8;
$y = 4;
$z = 5;

if ($x > 0 && $y > 0 && $z > 0 && ($x + $y > $z) && ($x + $z > $y) && ($y + $z > $x)) {
	echo "It's a triangle.";
} else {
	echo "It isn't a triangle.";
}
