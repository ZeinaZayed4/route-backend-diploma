<?php

$x = 'z';

if (($x >= 'A' && $x <= 'Z') || ($x >= 'a' && $x <= 'z')) {
	echo "$x is an alphabet.";
} else {
	echo "$x is not an alphabet.";
}
