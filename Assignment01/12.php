<?php

$x = 6;

switch ($x) {
	case 1:
	case 3:
	case 5:
	case 7:
	case 8:
	case 10:
	case 12:
		echo "This month has 31 days.";
		break;
	case 2:
		echo "This month has 28 days.";
		break;
	case 4:
	case 6:
	case 9:
	case 11:
		echo "This month has 30 days.";
		break;
	default:
		echo "Enter a number between 1 and 12.";
}
