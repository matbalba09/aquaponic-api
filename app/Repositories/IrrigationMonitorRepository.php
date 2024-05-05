<?php

namespace App\Repositories;

use App\Models\IrrigationMonitor;
use Carbon\Carbon;
use App\Repositories\Interface\IIrrigationMonitorRepository;

class IrrigationMonitorRepository implements IIrrigationMonitorRepository
{
    function getAll()
    {
        $irrigationMonitor = IrrigationMonitor::orderBy('id', 'desc')->get();
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

    function getAllTemp()
    {
        $temp = IrrigationMonitor::select('temp')->orderBy('id', 'desc')->get();
        return $temp;
    }

    function getAllEc()
    {
        $ec = IrrigationMonitor::select('ec')->orderBy('id', 'desc')->get();
        return $ec;
    }

    function getAllPpm()
    {
        $ppm = IrrigationMonitor::select('ppm')->orderBy('id', 'desc')->get();
        return $ppm;
    }

    function getAllPh()
    {
        $ph = IrrigationMonitor::select('ph')->orderBy('id', 'desc')->get();
        return $ph;
    }
}
