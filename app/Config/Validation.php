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
}
