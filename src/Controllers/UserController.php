<?php

namespace Monetus\Controllers;

use Monetus\Services\UserService;
use Monetus\DTOs\RegisterUserDTO;
use Monetus\DTOs\UpdateUserDTO;

class UserController
{
    public function index($request, $response)
    {
        UserService::listAllUsers();
    }

    public function show($request, $response)
    {
        UserService::listUserById($request->params['id']);
    }

    public function store($request, $response)
    {
        RegisterUserDTO::validate($request->body);
        UserService::registerUser($request, $response);
    }

    public function update($request, $response)
    {
        UpdateUserDTO::validate($request->body);
        UserService::updateUser($request, $response);
    }

    public function destroy($request, $response)
    {
        UserService::deleteUser($request->params['id']);
    }
}