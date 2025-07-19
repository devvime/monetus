<?php

namespace Pipu\Helpers;

use Pipu\Database\Database;

class Model
{
    public string $table;
    public array $fields;
    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll(array $fields = [], array $filters = [])
    {
        return $this->db->connect()->select($this->table, count($fields) > 0 ? $fields : $this->fields, $filters);
    }

    public function getById(int $id, array $fields = [])
    {
        return $this->db->connect()->select($this->table, count($fields) > 0 ? $fields : $this->fields, [
            "id" => $id
        ]);
    }

    public function findMany(array | string $fields = '', array $filter)
    {
        if ($fields === '*') {
            return $this->db->connect()->get($this->table, $fields, $filter);
        }
        return $this->db->connect()->get($this->table, count($fields) > 0 ? $fields : $this->fields, $filter);
    }

    public function create(array $fields)
    {
        return $this->db->connect()->insert($this->table, $fields);
    }

    public function update(int $id, array $fields)
    {
        return $this->db->connect()->update($this->table, $fields, [
            "id" => $id
        ]);
    }

    public function delete(int $id)
    {
        return $this->db->connect()->delete($this->table, [
            "id" => $id
        ]);
    }
}
