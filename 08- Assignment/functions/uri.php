<?php

function checkUri(): int
{
	$uri = $_SERVER['REQUEST_URI'];
	$uri_array = explode('/', $uri);
	return (int) end($uri_array);
}
