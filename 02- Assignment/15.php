<?php

$num = 12321;

$originalNum = $num;
$reversedNum = 0;

while ($num > 0) {
	$digit = $num % 10;
	$reversedNum = $reversedNum * 10 + $digit;
	$num = (int) ($num / 10);
}

if ($originalNum === $reversedNum) {
	echo "$originalNum is palindrome.";
} else {
	echo "$originalNum isn't palindrome.";
}
