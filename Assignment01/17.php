<?php

$a = 1;
$b = -3;
$c = 2;

$d = $b * $b - (4 * $a * $c);

if ($d > 0) {
	$root1 = (-$b + sqrt($d)) / (2 * $a);
	$root2 = (-$b - sqrt($d)) / (2 * $a);
	
	echo "Roots of the quadratic equation are: x1 = $root1, x2 = $root2.";
} elseif ($d < 0) {
	$realPart = -$b / (2 * $a);
	$imaginaryPart = sqrt(-$d) / (2 * $a);
	
	echo "Complex roots: x1 = $realPart + $imaginaryPart i, x2 = $realPart - $imaginaryPart i.";
} else {
	$root = -$b / (2 * $a);
	
	echo "Root of the quadratic equation is: x = $root.";
}
