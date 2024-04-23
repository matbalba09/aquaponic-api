<?php

namespace App\Repositories\Interface;

interface IIrrigationMonitorRepository
{
    function getAll();
    function getById($id);
    function create($temp, $ec, $ppm, $ph);
}