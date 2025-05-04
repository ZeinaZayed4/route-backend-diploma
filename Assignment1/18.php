<?php

$revenue = 1000;
$cost = 500;

$profitOrLoss = $revenue - $cost;

if ($profitOrLoss > 0) {
	echo "Profit: $$profitOrLoss.";
} elseif ($profitOrLoss < 0) {
	echo "Loss: $" . abs($profitOrLoss) . '.';
} else {
	echo "No profit or loss.";
}
