<?php

namespace Monetus\Services;

use Monetus\Database\Database;

class UserService
{
    public static function registerUser($request, $response)
    {
        $name = $request->body->name;
        $email = $request->body->email;
        $password = password_hash($request->body->password, PASSWORD_DEFAULT);

        $db = new Database();

        try {
            $db->connect()->insert('users', [
                "name" => $name,
                "email" => $email,
                "password" => $password
            ]);

            $response->json([
                "status" => 200,
                "message" => "User registered succesfully!"
            ]);
        } catch (\Exception $e) {
            $response->json([
                "error" => true,
                "message" => "User registration failed.",
                "exception" => $e
            ]);
        }
    }

    public static function listAllUsers()
    {
        $db = new Database();

        try {

            $users = $db->connect()->select('users', [
                'id',
                'name',
                'email',
                'avatar',
                'super_user',
                'created_at',
                'updated_at'
            ]);

            if ($users) {
                echo json_encode($users);
            }
        } catch (\Exception $error) {
            echo json_encode([
                "status" => 500,
                "message" => "Error in users list",
                "exception" => $error
            ]);
        }
    }

    public static function listUserById($id)
    {
        $db = new Database();

        try {

            $user = $db->connect()->select('users', [
                'id',
                'name',
                'email',
                'avatar',
                'super_user',
                'created_at',
                'updated_at'
            ], [
                "id" => $id
            ]);

            if ($user) {
                echo json_encode($user);
            } else {
                echo json_encode([
                    "status" => 404,
                    "message" => "User not found."
                ]);
            }
        } catch (\Exception $error) {
            echo json_encode([
                "status" => 500,
                "message" => "Error in users list",
                "exception" => $error
            ]);
        }
    }

    public static function updateUser($request, $response)
    {
        $db = new Database();

        try {

            $result = $db->connect()->update('users', $request->body, [
                "id" => $request->params['id']
            ]);

            if ($result) {
                echo json_encode([
                    "status" => 200,
                    "message" => "User updated successfully!"
                ]);
            } else {
                echo json_encode([
                    "status" => 500,
                    "message" => "Erro in user update."
                ]);
            }
        } catch (\Exception $error) {
            echo json_encode([
                "status" => 500,
                "message" => "Error in user update",
                "exception" => $error
            ]);
        }
    }

    public static function deleteUser($id)
    {
        $db = new Database();

        try {

            $result = $db->connect()->delete('users', [
                "id" => $id
            ]);

            if ($result) {
                echo json_encode([
                    "status" => 200,
                    "message" => "User deleted successfully."
                ]);
            } else {
                echo json_encode([
                    "status" => 500,
                    "message" => "Error in user delete"
                ]);
            }

        } catch (\Exception $error) {
            echo json_encode([
                "status" => 500,
                "message" => "Error in user delete",
                "exception" => $error
            ]);
        }
    }
}
