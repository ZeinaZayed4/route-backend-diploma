<?php

function factorial($num)
{
	if ($num < 0) {
		return "Number can't be less than zero.";
	}
	if ($num == 0 || $num == 1) {
		return 1;
	}
	return $num * factorial($num - 1);
}

$num = 5;

echo "Factorial of $num = " . factorial($num);
