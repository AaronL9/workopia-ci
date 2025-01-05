<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JobSeeder extends Seeder
{
    public function run()
    {
        // Sample data to be inserted into the job table
        $data = [
            [
                'user_id' => 1, // Assuming user with ID 1 exists
                'title' => 'Software Engineer',
                'description' => 'Responsible for developing and maintaining software applications.',
                'salary' => 80000,
                'tags' => 'PHP, JavaScript, MySQL',
                'company' => 'Tech Company',
                'address' => '123 Tech Lane',
                'city' => 'Tech City',
                'state' => 'CA',
                'phone' => '123-456-7890',
                'email' => 'hr@techcompany.com',
                'requirements' => 'Bachelor\'s degree in Computer Science or related field.',
                'benefits' => 'Health insurance, 401(k), Paid time off.',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'user_id' => 2, // Assuming user with ID 2 exists
                'title' => 'Product Manager',
                'description' => 'Oversee the development and marketing of products.',
                'salary' => 90000,
                'tags' => 'Product Management, Agile, Leadership',
                'company' => 'Another Tech Company',
                'address' => '456 Innovation Drive',
                'city' => 'Innovation City',
                'state' => 'NY',
                'phone' => '987-654-3210',
                'email' => 'jobs@anothertechcompany.com',
                'requirements' => 'Experience in product management and a strong understanding of market trends.',
                'benefits' => 'Flexible hours, Remote work options, Stock options.',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'user_id' => 2, // Assuming user with ID 3 exists
                'title' => 'Data Analyst',
                'description' => 'Analyze data to help the company make informed decisions.',
                'salary' => 70000,
                'tags' => 'Data Analysis, SQL, Excel',
                'company' => 'Data Insights Inc.',
                'address' => '789 Data St.',
                'city' => 'Data City',
                'state' => 'TX',
                'phone' => '321-654-9870',
                'email' => 'careers@datainsights.com',
                'requirements' => 'Strong analytical skills and experience with data visualization tools.',
                'benefits' => 'Health benefits, Paid training, Work from home options.',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'user_id' => 2, // Assuming user with ID 4 exists
                'title' => 'UX/UI Designer',
                'description' => 'Design user-friendly interfaces and improve user experience.',
                'salary' => 75000,
                'tags' => 'UX Design, UI Design, Adobe XD',
                'company' => 'Creative Solutions',
                'address' => '101 Design Ave.',
                'city' => 'Design City',
                'state' => 'FL',
                'phone' => '456-789-1234',
                'email' => 'jobs@creativesolutions.com',
                'requirements' => 'Experience with design software and a portfolio of design work.',
                'benefits' => 'Creative environment, Health insurance, Flexible schedule.',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
            [
                'user_id' => 1, // Assuming user with ID 5 exists
                'title' => 'Marketing Specialist',
                'description' => 'Develop and implement marketing strategies to promote products.',
                'salary' => 65000,
                'tags' => 'Marketing, SEO, Social Media',
                'company' => 'Marketing Gurus',
                'address' => '202 Marketing Blvd.',
                'city' => 'Marketing City',
                'state' => 'WA',
                'phone' => '654-321-0987',
                'email' => 'hr@marketinggurus.com',
                'requirements' => 'Experience in digital marketing and strong communication skills.',
                'benefits' => 'Health benefits, Paid time off, Professional development opportunities.',
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
            ],
        ];

        $this->db->table('job')->insertBatch($data);
    }
}