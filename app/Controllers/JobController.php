<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobModel;
use CodeIgniter\HTTP\ResponseInterface;

class JobController extends BaseController
{
    public function index()
    {
        helper('string_helper');

        $jobModel = model(JobModel::class);

        $data = $jobModel->findAll();

        return view('joblistings/index', ['listings' => $data]);
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
        $session = session();
        $errors = $session->get('errors');
        return view('joblistings/create.php', ['errors' => $errors]);
    }

    public function store()
    {
        helper('string_helper');
        helper('form');
        $session = session();


        $incomingData = $this->request->getPost([
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
        ]);

        if (!$this->validateData($incomingData, 'jobPost')) {
            $errors = $this->validator->getErrors();

            return redirect()->to('/jobs/create')->with('errors', $errors);
        }

        $jobData = $this->validator->getValidated();

        $jobData['user_id'] = $session->get('user')['id'];

        $jobModel = model(JobModel::class);

        $jobModel->save($jobData);

        return redirect()->to('/jobs')->with('success_message', 'Job Added Successfully');
    }
}