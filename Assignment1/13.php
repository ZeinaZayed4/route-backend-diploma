<?php

$x = 520;
$numberOfNotes = 0;

$hundredNotes = floor($x / 100);
$x -= ($hundredNotes * 100);
$numberOfNotes += $hundredNotes;

$fiftyNotes = floor($x / 50);
$x -= ($fiftyNotes * 50);
$numberOfNotes += $fiftyNotes;

$twentyNotes = floor($x / 20);
$x -= ($twentyNotes * 20);
$numberOfNotes += $twentyNotes;

$tenNotes = floor($x / 10);
$x -= ($tenNotes * 10);
$numberOfNotes += $tenNotes;

$fiveNotes = floor($x / 5);
$x -= ($fiveNotes * 5);
$numberOfNotes += $fiveNotes;

$oneNote = floor($x / 1);
$x -= ($oneNote * 1);
$numberOfNotes += $oneNote;

echo "Total number of notes is: $numberOfNotes";
