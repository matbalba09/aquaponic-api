<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IrrigationMonitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'temp',
        'ec',
        'ppm',
        'ph',
    ];
}
