<?php

namespace Houston\Client;

use Houston\Client\Model\Host;

class Client
{
    private $apiClient;

    public function __construct($username, $password, $url)
    {
        $this->apiClient = new ApiClient($username, $password, $url);
    }

    public function getHosts($accountName, $infrastructureName, $filter = [])
    {
        $uriString = $accountName . '/' . $infrastructureName . '/' . 'hosts';
        if ($filter) {
            $getArray = [];
            if (array_key_exists('groups', $filter)) {
                $getArray[] = '_g='.implode(',', $filter['groups']);
            }
            if (array_key_exists('properties', $filter)) {
                foreach ($filter['properties'] as $k => $v)
                {
                    $getArray[] = $k.'='.$v;
                }
            }
            $uriString .= '?' . implode('&', $getArray);
        }

        $data = $this->apiClient->request('get', $uriString);
        $ret = [];
        foreach ($data['hosts'] as $host) {
            $obj = new Host();
            $obj->fillData($host);
            $ret[] = $obj;
        }
        return $ret;
    }
}
