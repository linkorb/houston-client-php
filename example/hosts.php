<?php

include 'common.php';

$client = new \Houston\Client\Client($username, $password, $url);

$filter = [
    '_g' => ['web', 'db'], // fetch hosts in groups web and db
    'properties' => ['storage' => 50, 'ram' => 100] // fetch with properties storage = 50 and ram = 100
];

try {
    $hosts = $client->getHosts('test', 'linode', $filter);
    // the result is an array of Host class instances
    foreach ($hosts as $host) {
        echo 'host label: '.$host->getName() ."\n";
        echo 'host state: '.$host->getState() ."\n";
        echo 'host type: '.$host->getProviderAccountType();
        echo PHP_EOL;
    }
} catch (\Exception $e) {
    switch ($e->getCode()) {
        case 400:
            echo 'Bad Request: ', $e->getMessage();
            break;
        case 403:
            echo 'Access denied or Unauthorised: ', $e->getMessage();
            break;
        case 404:
            echo 'Not found: ', $e->getMessage();
            break;
    }
}
