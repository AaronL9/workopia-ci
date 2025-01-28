<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public array $signup = [
        'name' => [
            'rules' => 'required|max_length[30]',
            'errors' => [
                'required' => 'You must provide your name.',
                'max_length' => 'Name cannot exceed 30 characters.',
            ],
        ],
        'email' => [
            'rules' => 'required|max_length[254]|valid_email',
            'errors' => [
                'required' => 'You must provide an email address.',
                'max_length' => 'Email cannot exceed 254 characters.',
                'valid_email' => 'Please check the Email field. It does not appear to be valid.',
            ],
        ],
        'city' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'You must provide your city.',
            ],
        ],
        'password' => [
            'rules' => 'required|max_length[255]',
            'errors' => [
                'required' => 'You must provide a password.',
                'max_length' => 'Password cannot exceed 255 characters.',
            ],
        ],
        'password_confirmation' => [
            'rules' => 'matches[password]',
            'errors' => [
                'matches' => 'Password does not match.',
            ],
        ],
    ];

    public array $login = [
        'email' => [
            'rules' => 'required|max_length[254]|valid_email',
            'errors' => [
                'required' => 'You must provide an email address.',
                'max_length' => 'Email cannot exceed 254 characters.',
                'valid_email' => 'Please check the Email field. It does not appear to be valid.',
            ],
        ],
    ];

    public array $jobPost = [
        'title' => [
            'rules' => 'required|max_length[100]',
            'errors' => [
                'required' => 'The job title is required.',
                'max_length' => 'The job title cannot exceed 100 characters.',
            ],
        ],
        'description' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The job description is required.',
            ],
        ],
        'salary' => [
            'rules' => 'required|numeric',
            'errors' => [
                'required' => 'The salary field is required.',
                'numeric' => 'The salary must be a valid number.',
            ],
        ],
        'requirements' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The job requirements are required.',
            ],
        ],
        'benefits' => [
            'rules' => 'permit_empty|max_length[500]',
            'errors' => [
                'max_length' => 'The benefits field cannot exceed 500 characters.',
            ],
        ],
        'company' => [
            'rules' => 'required|max_length[100]',
            'errors' => [
                'required' => 'The company name is required.',
                'max_length' => 'The company name cannot exceed 100 characters.',
            ],
        ],
        'address' => [
            'rules' => 'required|max_length[200]',
            'errors' => [
                'required' => 'The address is required.',
                'max_length' => 'The address cannot exceed 200 characters.',
            ],
        ],
        'city' => [
            'rules' => 'required|max_length[50]',
            'errors' => [
                'required' => 'The city is required.',
                'max_length' => 'The city cannot exceed 50 characters.',
            ],
        ],
        'state' => [
            'rules' => 'required|max_length[50]',
            'errors' => [
                'required' => 'The state is required.',
                'max_length' => 'The state cannot exceed 50 characters.',
            ],
        ],
        'phone' => [
            'rules' => 'required|regex_match[/^[0-9]{10,15}$/]',
            'errors' => [
                'required' => 'The phone number is required.',
                'regex_match' => 'The phone number must be between 10 to 15 digits.',
            ],
        ],
        'email' => [
            'rules' => 'required|valid_email|max_length[254]',
            'errors' => [
                'required' => 'The email address is required.',
                'valid_email' => 'Please provide a valid email address.',
                'max_length' => 'The email cannot exceed 254 characters.',
            ],
        ],
    ];

}
