<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interface\IUserRepository;
use Carbon\Carbon;

class UserRepository implements IUserRepository
{

    function getAllUsers()
    {
        $users = User::get();
        return $users;
    }

    function getUserByEmail($email)
    {
        $user = User::where('email', $email)->first();
        return $user;
    }
}