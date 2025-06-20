<?php

declare(strict_types=1);

function MonthAfter($date): string
{
	$date = date_create($date);
	
	date_add($date, date_interval_create_from_date_string("1 month"));
	
	return date_format($date, "Y-m-d");
}

echo MonthAfter("2012-12-21");
