<?php

require_once __DIR__ . '/../vendor/autoload.php';

$username = getenv('HOUSTON_USERNAME');
$password = getenv('HOUSTON_PASSWORD');
$url = getenv('HOUSTON_URL');

if (!$url || !$username || !$password) {
    throw new RuntimeException("Please refer to the README.md file on how to setup the environment variables");
}

echo "CONFIG:\n";
echo " * URL: $url\n";
echo " * USERNAME: $username\n";
echo " * PASSWORD: $password\n";