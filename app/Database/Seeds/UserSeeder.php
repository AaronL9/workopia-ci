<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '987-654-3210',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'phone' => '321-654-9870',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bob.brown@example.com',
                'phone' => '456-789-1234',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'name' => 'Charlie Davis',
                'email' => 'charlie.davis@example.com',
                'phone' => '654-321-0987',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
        ];

        $this->db->table('user')->insertBatch($data);
    }
}