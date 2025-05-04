<?php

$x = 'z';

if (($x >= 'A' && $x <= 'Z') || ($x >= 'a' && $x <= 'z')) {
	switch ($x) {
		case 'a':
		case 'A':
		case 'e':
		case 'E':
		case 'i':
		case 'I':
		case 'o':
		case 'O':
		case 'u':
		case 'U':
			echo "$x is a vowel character.";
			break;
		default:
			echo "$x is a consonant character.";
	}
} else {
	echo "$x isn't an alphabet character.";
}
