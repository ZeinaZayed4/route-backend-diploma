<?php

$numbers = [8, 4, 2, 6];
$n = count($numbers);

for ($i = 0; $i < $n - 1; ++$i) {
	for ($j = 0; $j < $n - $i - 1; ++$j) {
		if ($numbers[$j] > $numbers[$j + 1]) {
			$temp = $numbers[$j];
			$numbers[$j] = $numbers[$j + 1];
			$numbers[$j + 1] = $temp;
		}
	}
}

foreach ($numbers as $number) {
	echo $number . ' ';
}
