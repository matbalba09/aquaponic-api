<?php

namespace App\Repositories\Interface;

interface IUserRepository
{
    function getAllUsers();
    function getUserByEmail($email);
}