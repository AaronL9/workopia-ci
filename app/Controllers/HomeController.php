<?php

namespace App\Controllers;

use App\Models\JobModel;

class HomeController extends BaseController
{
    public function index(): string
    {
        helper('string_helper');
        $jobModelInstance = new JobModel();
        $data = $jobModelInstance->getJobs();

        return view('home', ['listings' => $data]);
    }
}
