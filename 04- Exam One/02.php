<?php

// 1
for ($i = 1; $i <= 5; ++$i) {
	for ($s = 1; $s <= (5 - $i); ++$s) {
		echo "&nbsp;";
	}
	for ($j = 1; $j <= $i; ++$j) {
		echo '* ';
	}
	echo '<br />';
}
for ($i = 4; $i >= 1; --$i) {
	for ($s = 1; $s <= (5 - $i); ++$s) {
		echo "&nbsp;";
	}
	for ($j = 1; $j <= $i; ++$j) {
		echo '* ';
	}
	echo '<br />';
}

echo '<hr />';

// 2
for ($i = 1; $i <= 5; ++$i) {
	for ($j = 1; $j <= $i; ++$j) {
		echo '* ';
	}
	echo '<br />';
}

for ($i = 5; $i >= 1; --$i) {
	for ($j = 1; $j <= $i; ++$j) {
		echo '* ';
	}
	echo '<br />';
}

echo '<hr />';

// 3
for ($i = 1; $i <= 3; ++$i) {
	for ($j = 1; $j <= $i * 2 - 1; ++$j) {
		echo '* ';
	}
	echo '<br />';
}
for ($i = 2; $i >= 1; --$i) {
	for ($j = 1; $j <= $i * 2 - 1; ++$j) {
		echo '* ';
	}
	echo '<br />';
}
