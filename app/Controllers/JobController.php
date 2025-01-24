<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobModel;
use CodeIgniter\HTTP\ResponseInterface;

class JobController extends BaseController
{
    public function index()
    {
        //
    }

    public function show(string $id)
    {
        helper('string_helper');

        $jobModel = model(JobModel::class);

        $data = $jobModel->getJob($id);

        return view('joblistings/show', ['listing' => $data]);
    }

    public function create()
    {
        helper('form');
        return view('joblistings/create.php');
    }

    public function store() {
        
    }
}
