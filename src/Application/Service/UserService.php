<?php

namespace Pipu\Application\Service;

use DomainException;
use Pipu\Application\Model\User;

class UserService
{
    public function __construct(
        public User $user = new User()
    ) {}

    public function registerUser($request, $response)
    {
        try {
            $password = password_hash($request->body->password, PASSWORD_DEFAULT);
            $this->user->create([
                "name" => $request->body->name,
                "email" => $request->body->email,
                "password" => $password
            ]);
            return [
                "status" => 200,
                "message" => "User registered succesfully!"
            ];
        } catch (DomainException $error) {
            throw new DomainException($error);
        }
    }

    public function listAllUsers(array $filters = [])
    {
        try {
            $users = $this->user->getAll(filters: $filters);
            return $users;
        } catch (DomainException $error) {
            throw new DomainException($error);
        }
    }

    public function listUserById($id)
    {
        try {
            $user = $this->user->getById($id);
            if ($user) {
                return $user;
            }
            return [
                "status" => 404,
                "message" => "User not found."
            ];
        } catch (DomainException $error) {
            throw new DomainException($error);
        }
    }

    public function updateUser($request, $response)
    {
        try {
            $this->user->update($request->params['id'], $request->body);
            return [
                "status" => 200,
                "message" => "User updated successfully!"
            ];
        } catch (DomainException $error) {
            throw new DomainException($error);
        }
    }

    public function deleteUser($id)
    {
        try {
            $this->user->delete($id);
            return [
                "status" => 200,
                "message" => "User deleted successfully."
            ];
        } catch (DomainException $error) {
            throw new DomainException($error);
        }
    }
}
