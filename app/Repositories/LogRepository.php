<?php

namespace App\Repositories;

use App\Models\Log;
use Carbon\Carbon;
use App\Repositories\Interface\ILogRepository;

class LogRepository implements ILogRepository
{
    function getAll()
    {
        $log = Log::orderBy('id', 'desc')->get();
        return $log;
    }

    function getById($id)
    {
        $log = Log::findOrFail($id);
        return $log;
    }

    function create($device, $status)
    {
        $log = Log::create([
            'device' => $device,
            'status' => $status
        ]);

        return $log;
    }
}
