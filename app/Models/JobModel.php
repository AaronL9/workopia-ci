<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $table = 'job';
    protected $returnType = 'object';

    protected $allowedFields = [
        'user_id',
        'title',
        'description',
        'salary',
        'requirements',
        'benefits',
        'company',
        'address',
        'city',
        'state',
        'phone',
        'email',
    ];

    public function getJobs()
    {
        return $this->findAll();
    }

    public function getJob($id)
    {
        return $this->find($id);
    }
}
