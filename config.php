<?php

$host = $_SERVER['HTTP_HOST'];

$isLocal = (
    $host === 'localhost' ||
    $host === '127.0.0.1' ||
    filter_var($host, FILTER_VALIDATE_IP)
);

define('BASE_URL', $isLocal ? '/designsbypooja/' : '/');

?>