<?php

namespace App\Repositories;

use App\Models\IrrigationMonitor;
use Carbon\Carbon;
use App\Repositories\Interface\IIrrigationMonitorRepository;

class IrrigationMonitorRepository implements IIrrigationMonitorRepository
{
    function getAll()
    {
        $irrigationMonitor = IrrigationMonitor::get();
        return $irrigationMonitor;
    }

    function getById($id)
    {
        $irrigationMonitor = IrrigationMonitor::findOrFail($id);
        return $irrigationMonitor;
    }

    function create($temp, $ec, $ppm, $ph)
    {
        $irrigationMonitor = IrrigationMonitor::create([
            'temp' => $temp,
            'ec' => $ec,
            'ppm' => $ppm,
            'ph' => $ph,
        ]);

        return $irrigationMonitor;
    }
}