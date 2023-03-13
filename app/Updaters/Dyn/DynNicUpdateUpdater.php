<?php

namespace App\Updaters\Dyn;

use App\Updaters\DnsUpdate;
use App\Updaters\Updater;
use Illuminate\Http\Request;

class DynNicUpdateUpdater extends Updater
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request) // @todo remove request from here
    {
        $this->request = $request;
    }

    public function validate(): bool
    {
        return true; // @todo implement validation
    }

    public function build(): DnsUpdate
    {
        $hostname = explode('.', $this->request->get('hostname'));

        return new DnsUpdate(
            $this->request->getUser(),
            $this->request->getPassword(),
            $hostname[0],
            $hostname[1],
            $this->request->get('myip')
        );
    }
}
