<?php

declare(strict_types=1);

function Matches(string $str, string $subStr): int
{
	return preg_match("/$subStr/i", $str);
}

$str = "Welcome to PHP!";
$subStr = "come";
$matches = Matches($str, $subStr) ? "Matches." : "Doesn't match!";

echo $matches;
