<?php

function getPriceWithDiscount($price)
{
	if ($price > 1000) {
		$priceAfterDiscount = $price - $price * 0.10;
	} else {
		$priceAfterDiscount = $price - $price * 0.05;
	}
	return $priceAfterDiscount;
}

//echo getPriceWithDiscount(2000);
