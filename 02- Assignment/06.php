<?php

$text = "the new word, the new word.";

$text = preg_replace("/\bthe\b/", "best", $text, 1);

echo $text;
