<?php

$x = 12;
$y = 8;
$z = 4;

if ($x > $y && $x > $z) {
	echo "$x is the greatest number.";
} elseif ($y > $x && $y > $z) {
	echo "$y is the greatest number.";
} else {
	echo "$z is the greatest number.";
}
