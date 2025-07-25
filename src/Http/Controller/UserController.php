<?php

namespace Pipu\Http\Controller;

use Pipu\Application\Service\UserService;

class UserController
{
    public function __construct(
        private UserService $userService = new UserService()
    ) {}

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
        $result = $this->userService->registerUser($request, $response);
        $response->json($result);
    }

    public function update($request, $response)
    {
        $result = $this->userService->updateUser($request, $response);
        $response->json($result);
    }

    public function destroy($request, $response)
    {
        $result = $this->userService->deleteUser($request->params['id']);
        $response->json($result);
    }
}
