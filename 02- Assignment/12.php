<?php

$num = 2468;

$lastDigit = 2468 % 10;

$temp = $num;
while ($temp >= 10) {
	$temp = (int) ($temp / 10);
}
$firstDigit = $temp;

echo "First digit = $firstDigit.<br />";
echo "Last digit = $lastDigit.";
