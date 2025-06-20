<?php

declare(strict_types=1);

function Prime(int $num): bool
{
	$isPrime = true;
	if ($num === 1) {
		$isPrime = false;
	} else {
		for ($i = 2; $i <= sqrt($num); ++$i) {
			if ($num % $i === 0) {
				$isPrime = false;
			}
		}
	}
	return $isPrime;
}

$num = 5;
$prime = Prime($num) ? "Prime number." : "Not a prime number.";

echo $prime;
