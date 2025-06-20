<?php

declare(strict_types=1);

function MaxNumber(array $nums): float
{
	$max = $nums[0];
	for ($i = 0; $i < count($nums); ++$i) {
		if ($nums[$i] > $max) {
			$max = $nums[$i];
		}
	}
	return $max;
}

$numbers = [10, 3, 20];

echo "Maximum number = " . MaxNumber($numbers);
