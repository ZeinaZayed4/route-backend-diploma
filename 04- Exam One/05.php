<?php

declare(strict_types=1);

function OddNumbers(array $nums): array
{
	$oddNumbers = [];
	foreach ($nums as $num) {
		if ($num % 2 != 0) {
			$oddNumbers[] = $num;
		}
	}
	foreach ($oddNumbers as $num) {
		unset($num);
	}
	return $oddNumbers;
}

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo '<pre>';
print_r(OddNumbers($nums));
echo '</pre>';
