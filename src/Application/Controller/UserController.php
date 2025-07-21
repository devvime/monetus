<?php

namespace Pipu\Application\Controller;

use Pipu\Http\Dto\RegisterUserDTO;
use Pipu\Http\Dto\UpdateUserDTO;
use Pipu\Application\Service\UserService;

class UserController
{
    public UserService $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index($request, $response)
    {
        $result = $this->userService->listAllUsers($request->query);
        $response->json($result);
    }

    public function show($request, $response)
    {
        $result = $this->userService->listUserById($request->params['id']);
        $response->json($result);
    }

    public function store($request, $response)
    {
        RegisterUserDTO::validate($request->body);
        $result = $this->userService->registerUser($request, $response);
        $response->json($result);
    }

    public function update($request, $response)
    {
        UpdateUserDTO::validate($request->body);
        $result = $this->userService->updateUser($request, $response);
        $response->json($result);
    }

    public function destroy($request, $response)
    {
        $result = $this->userService->deleteUser($request->params['id']);
        $response->json($result);
    }
}
