<?php

namespace App\Repositories\Interface;

interface IIrrigationMonitorRepository
{
    function getAll();
    function getById($id);
    function create($temp, $ec, $ppm, $ph);

    function getAllTemp();
    function getAllEc();
    function getAllPpm();
    function getAllPh();
}