<?php

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$asc = $array;
$desc = $array;
$len = count($array);

for ($i =0; $i < $len; ++$i) {
	for ($j = 0; $j < $len - 1; ++$j) {
		if ($asc[$j + 1] < $asc[$j]) {
			$tmp = $asc[$j + 1];
			$asc[$j + 1] = $asc[$j];
			$asc[$j] = $tmp;
		}
	}
}

for ($i =0; $i < $len; ++$i) {
	for ($j = 0; $j < $len - 1; ++$j) {
		if ($desc[$j + 1] > $desc[$j]) {
			$tmp = $desc[$j + 1];
			$desc[$j + 1] = $desc[$j];
			$desc[$j] = $tmp;
		}
	}
}

echo "Original array:<br />";
echo '<pre>';
print_r($array);
echo '</pre>';

echo "Ascending array:<br />";
echo '<pre>';
print_r($asc);
echo '</pre>';

echo "Descending array:<br />";
echo '<pre>';
print_r($desc);
echo '</pre>';
