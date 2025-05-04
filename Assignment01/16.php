<?php

$x = 8;
$y = 4;
$z = 6;

if ($x == $y && $x == $z) {
	echo "It's an equilateral triangle.";
} elseif ($x == $y || $x == $z || $y == $z) {
	echo "It's an isosceles triangle.";
} else {
	echo "It's a scalene triangle.";
}
