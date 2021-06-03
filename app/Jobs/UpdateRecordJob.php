<?php

namespace App\Jobs;

use App\Updaters\DnsUpdate;
use GuzzleHttp\Client;

class UpdateRecordJob extends Job
{
    const BASE_URL = 'https://app.dnsmanager.io/api/v1/';

    /**
     * @var DnsUpdate
     */
    private $update;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(DnsUpdate $update)
    {
        $this->update = $update;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $client = new Client([
            'base_uri' => self::BASE_URL,
            'auth' => $this->update->apiKeyPair(),
        ]);

        $client->put($this->buildUrl(), [
            'json' => [
                'content' => $this->update->getDnsValue()
            ]
        ]);
    }

    private function buildUrl(): string
    {
        return 'user/domain/' . $this->update->getDomainId() . '/record/' . $this->update->getRecordId();
    }
}
