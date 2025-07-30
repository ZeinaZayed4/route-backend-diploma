<?php

function message($content, int $code): void
{
	echo json_encode($content);
	http_response_code($code);
}
