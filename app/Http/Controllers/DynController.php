<?php

namespace App\Http\Controllers;

use App\Updaters\Dyn\DynNicUpdateUpdater;
use Illuminate\Http\Request;

class DynController extends Controller
{
    public function nicUpdate(Request $request)
    {
        $updater = new DynNicUpdateUpdater($request);

        if (! $updater->validate()) {
            return response('nocgh', 400);
        }

        $updater->dispatch();

        return response('good');
    }
}
