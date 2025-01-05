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
                'city' => 'New York',
                'password' => password_hash('password123', PASSWORD_DEFAULT), // unhashed: password123
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'city' => 'Los Angeles',
                'password' => password_hash('password123', PASSWORD_DEFAULT), // unhashed: password123
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'city' => 'Chicago',
                'password' => password_hash('password123', PASSWORD_DEFAULT), // unhashed: password123
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bob.brown@example.com',
                'city' => 'Houston',
                'password' => password_hash('password123', PASSWORD_DEFAULT), // unhashed: password123
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'name' => 'Charlie Davis',
                'email' => 'charlie.davis@example.com',
                'city' => 'Phoenix',
                'password' => password_hash('password123', PASSWORD_DEFAULT), // unhashed: password123
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
        ];

        $this->db->table('user')->insertBatch($data);
    }
}