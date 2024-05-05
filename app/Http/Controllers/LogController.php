<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Repositories\Interface\ILogRepository;
use App\Response;
use Illuminate\Http\Request;

class LogController extends Controller
{
    private ILogRepository $logRepository;

    public function __construct(ILogRepository $logRepository)
    {
        $this->logRepository = $logRepository;
    }

    public function index()
    {
        $logs = $this->logRepository->getAll();

        $response = [
            'code' => Response::HTTP_SUCCESS,
            'status' => Response::SUCCESS,
            'message' => Response::SUCCESSFULLY_GET_ALL_LOGS,
            'count' => Log::count(),
            'data' => $logs,
        ];

        return response()->json($response, $response['code']);
    }

    public function getById($id)
    {
        $log = $this->logRepository->getById($id);

        $response = [
            'code' => Response::HTTP_SUCCESS,
            'status' => Response::SUCCESS,
            'message' => Response::SUCCESSFULLY_GET_LOG,
            'data' => $log,
        ];

        return response()->json($response, $response['code']);
    }

    public function create($device, $status)
    {
        $log = $this->logRepository->create($device, $status);

        $response = [
            'code' => Response::HTTP_SUCCESS,
            'status' => Response::SUCCESS,
            'message' => Response::SUCCESSFULLY_CREATED_LOG,
            'data' => $log,
        ];

        return response()->json($response, $response['code']);
    }
}
