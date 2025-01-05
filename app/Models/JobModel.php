<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $table = 'job';
    protected $returnType = 'object';

    public function getJobs() {
        return $this->findAll();
    }

    public function getJob($id) {
        return $this->find($id);
    }
}
