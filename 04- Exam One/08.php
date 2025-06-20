<?php

declare(strict_types=1);

function MonthBefore($date): string
{
	$date = date_create($date);
	
	date_sub($date, date_interval_create_from_date_string("1 month"));
	
	return date_format($date, "m");
}

echo MonthBefore("2021-12-21");
