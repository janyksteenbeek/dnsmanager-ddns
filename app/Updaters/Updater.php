<?php

namespace App\Updaters;

use App\Jobs\UpdateRecordJob;

abstract class Updater
{
    abstract public function build(): DnsUpdate;

    abstract public function validate(): bool;

    public function dispatch()
    {
        dispatch(new UpdateRecordJob($this->build()));
    }
}
