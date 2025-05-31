<?php

$names = ["Hana", "Safa", "Zeina", "Adam", "Yahya"];

unset($names[2]);

echo '<pre>';
print_r($names);
echo '</pre>';

$names = array_values($names);

echo '<pre>';
print_r($names);
echo '</pre>';
