<?php

declare(strict_types=1);

function Average(array $nums): float
{
	return array_sum($nums) / count($nums);
}

$average = Average([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

echo "Average = $average";
