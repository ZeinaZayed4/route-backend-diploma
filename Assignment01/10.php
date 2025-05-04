<?php

$x = 'Z';

if ($x >= 'A' && $x <= 'Z') {
	echo "$x is an upper case alphabet character.";
} elseif ($x >= 'a' && $x <= 'z') {
	echo "$x is a lower case alphabet character.";
} else {
	echo "$x is not an alphabet character.";
}
