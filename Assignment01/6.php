<?php

$x = 2002;

if (($x % 4 == 0) && (($x % 100 != 0) || ($x % 400 == 0))) {
	echo "$x is a leap year.";
} else {
	echo "$x is not a leap year.";
}
