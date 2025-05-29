<?php

$text = "techstudy";
$numberOfT = 0;

for ($i = 0; $i < strlen($text); ++$i) {
	if ($text[$i] == "t") {
		$numberOfT++;
	}
}

echo "Number of 't' in the '$text' = $numberOfT.";
