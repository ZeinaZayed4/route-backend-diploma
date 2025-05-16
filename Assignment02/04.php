<?php

$emailID = "zeinazayed4@gmail.com";

$strPos = strpos($emailID, '@');

$username = substr($emailID, 0, $strPos);

echo $username;
