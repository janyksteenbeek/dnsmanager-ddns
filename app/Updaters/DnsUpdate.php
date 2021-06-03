<?php

namespace App\Updaters;

class DnsUpdate
{
    private $apiId;
    private $apiKey;
    private $domainId;
    private $recordId;
    private $dnsValue;

    public function __construct($apiId, $apiKey, $domainId, $recordId, $dnsValue)
    {
        $this->apiId = $apiId;
        $this->apiKey = $apiKey;
        $this->domainId = $domainId;
        $this->recordId = $recordId;
        $this->dnsValue = $dnsValue;
    }

    public function getApiId()
    {
        return $this->apiId;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getDomainId()
    {
        return $this->domainId;
    }

    public function getRecordId()
    {
        return $this->recordId;
    }

    public function getDnsValue()
    {
        return $this->dnsValue;
    }

    public function apiKeyPair()
    {
        return [$this->getApiId(), $this->getApiKey()];
    }

}
