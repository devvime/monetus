<?php

namespace Monetus\Controllers;

use Monetus\Services\UserService;
use Monetus\DTOs\RegisterUserDTO;
use Monetus\DTOs\DTO;

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
        DTO::obstruct('Super User', $request->body->super_user);
        DTO::obstruct('Created at', $request->body->created_at);
        DTO::isEmail('Email', $request->body->email);
        UserService::updateUser($request, $response);
    }

    public function destroy($request, $response)
    {
        UserService::deleteUser($request->params['id']);
    }
}