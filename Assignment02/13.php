<?php

$num = 2468;

$lastDigit = $num % 10;

$temp = $num;
while ($temp >= 10) {
	$temp = (int) ($temp / 10);
}
$firstDigit = $temp;

$sum = $firstDigit + $lastDigit;

echo "Sum = $sum.";
