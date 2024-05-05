<?php

namespace App\Repositories\Interface;

interface ILogRepository
{
    function getAll();
    function getById($id);
    function create($device, $status);
}