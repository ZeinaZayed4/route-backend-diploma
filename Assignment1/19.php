<?php

$physics = 90;
$chemistry = 85;
$biology = 95;
$math = 96;
$computer = 88;

$percentage = ($physics + $chemistry + $biology + $math + $computer) / 500 * 100;

if ($percentage >= 90 && $percentage <= 100) {
	echo "Grade A.";
} elseif ($percentage >= 80) {
	echo "Grade B.";
} elseif ($percentage >= 70) {
	echo "Grade C.";
} elseif ($percentage >= 60) {
	echo "Grade D.";
} elseif ($percentage >= 40) {
	echo "Grade E.";
} elseif ($percentage < 40 && $percentage >= 0) {
	echo "Grade F.";
} else {
	echo "No grade for this.";
}
