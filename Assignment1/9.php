<?php

$x = 'z';

if (($x >= 'A' && $x <= 'Z') || ($x >= 'a' && $x <= 'z')) {
	echo "$x is an alphabet character.";
} elseif ($x >= 0 && $x <= 9) {
	echo "$x is a digit.";
} else {
	echo "$x is a special character.";
}
