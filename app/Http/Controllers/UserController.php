<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Interface\IUserRepository;
use App\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private IUserRepository $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAllUsers();

        if ($users->isEmpty()) {
            $response = [
                'code' => Response::HTTP_NOT_FOUND,
                'status' => Response::FAIL,
                'message' => Response::USER_NOT_FOUND,
            ];
        }

        $response = [
            'code' => Response::HTTP_SUCCESS,
            'status' => Response::SUCCESS,
            'message' => Response::SUCCESSFULLY_GET_ALL_USERS,
            'count' => User::count(),
            'data' => $users,
        ];

        return response()->json($response, $response['code']);
    }

    public function register(Request $request)
    {
        $existingUserEmail = $this->userRepository->getUserByEmail($request->email);

        if ($existingUserEmail) {
            $response = [
                'code' => Response::HTTP_CONFLICT,
                'status' => Response::FAIL,
                'message' => Response::INVALID_EMAIL,
            ];
            return response()->json($response, $response['code']);
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $response = [
            'code' => Response::HTTP_SUCCESS_POST,
            'status' => Response::SUCCESS,
            'message' => Response::SUCCESSFULLY_REGISTERED_USER,
            'user' => $user,
        ];

        return response()->json($response, $response['code']);
    }

    public function login(Request $request)
    {
        if ($request->has('username') || $request->has('email')) {
            $user = User::where('username', $request->username)
                ->orWhere('email', $request->email)
                ->first();
            if ($user) {
                if (!Hash::check($request->password, $user->password)) {
                    $response = [
                        'code' => Response::HTTP_UNAUTHORIZED,
                        'status' => Response::FAIL,
                        'message' => Response::INVALID_CREDENTIAL,
                    ];
                } else {
                    $response = [
                        'code' => Response::HTTP_SUCCESS,
                        'status' => Response::SUCCESS,
                        'message' => Response::SUCCESSFULLY_LOGGED_IN,
                        'user' => [
                            'username' => $user->username,
                            'email' => $user->email,
                        ],
                    ];
                }
            } else {
                $response = [
                    'code' => Response::HTTP_NOT_FOUND,
                    'status' => Response::FAIL,
                    'message' => Response::USER_NOT_FOUND,
                ];
            }
        } else {
            $response = [
                'code' => Response::HTTP_NOT_PROCESSABLE,
                'status' => Response::FAIL,
                'message' => Response::INCORRECT_LOGIN_INPUT,
            ];
        }
        return response()->json($response, $response['code']);
    }
}
