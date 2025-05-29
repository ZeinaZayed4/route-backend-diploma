<?php

$num = 2468;
$original = $num;

$lastDigit = $num % 10;

$firstDigit = $num;
$digitsCount = 0;
while ($firstDigit >= 10) {
	$firstDigit = (int) ($firstDigit / 10);
	++$digitsCount;
}
++$digitsCount;

$firstDigitWeight = pow(10, $digitsCount - 1);

$middlePart = $num - $firstDigit * $firstDigitWeight - $lastDigit;

$newNum = $lastDigit * $firstDigitWeight + $middlePart + $firstDigit;

echo "Number = $original.<br />";
echo "New Number = $newNum.";
