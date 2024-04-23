<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IrrigationMonitor;
use App\Repositories\Interface\IIrrigationMonitorRepository;
use App\Response;
use Illuminate\Http\Request;

class IrrigationMonitorController extends Controller
{
    private IIrrigationMonitorRepository $irrigationMonitorRepository;

    public function __construct(IIrrigationMonitorRepository $irrigationMonitorRepository)
    {
        $this->irrigationMonitorRepository = $irrigationMonitorRepository;
    }

    public function index()
    {
        $irrigationMonitor = $this->irrigationMonitorRepository->getAll();

        $response = [
            'code' => Response::HTTP_SUCCESS,
            'status' => Response::SUCCESS,
            'message' => Response::SUCCESSFULLY_GET_ALL_IRRIGATION_DATA,
            'count' => IrrigationMonitor::count(),
            'data' => $irrigationMonitor,
        ];

        return response()->json($response, $response['code']);
    }

    public function getById($id)
    {
        $irrigationMonitor = $this->irrigationMonitorRepository->getById($id);

        $response = [
            'code' => Response::HTTP_SUCCESS,
            'status' => Response::SUCCESS,
            'message' => Response::SUCCESSFULLY_GET_IRRIGATION_DATA,
            'data' => $irrigationMonitor,
        ];

        return response()->json($response, $response['code']);
    }

    public function create($temp, $ec, $ppm, $ph)
    {
        $irrigationMonitor = $this->irrigationMonitorRepository->create($temp, $ec, $ppm, $ph);

        $response = [
            'code' => Response::HTTP_SUCCESS_POST,
            'status' => Response::SUCCESS,
            'message' => Response::SUCCESSFULLY_CREATED_IRRIGATION_DATA,
            'data' => $irrigationMonitor,
        ];

        return response()->json($response, $response['code']);
    }
}
