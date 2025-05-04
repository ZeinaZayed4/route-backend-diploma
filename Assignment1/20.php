<?php

$salary = 10000;

if ($salary <= 10000) {
	$HRA = $salary * 0.20;
	$DA = $salary * 0.80;
	
	$grossSalary = $salary + $HRA + $DA;
	echo "Gross salary is: $grossSalary.";
} elseif ($salary <= 20000 && $salary > 10000) {
	$HRA = $salary * 0.25;
	$DA = $salary * 0.90;
	
	$grossSalary = $salary + $HRA + $DA;
	echo "Gross salary is: $grossSalary.";
} else {
	$HRA = $salary * 0.30;
	$DA = $salary * 0.95;
	
	$grossSalary = $salary + $HRA + $DA;
	echo "Gross salary is: $grossSalary.";
}
