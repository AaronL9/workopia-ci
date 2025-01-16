<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $returnType = 'object';
    protected $allowedFields = ['name', 'email', 'phone', 'city', 'password'];

    public function getUser($email)
    {
        return $this->db->table($this->table)
            ->where('email', $email)
            ->get()
            ->getResult('object');
    }
}
