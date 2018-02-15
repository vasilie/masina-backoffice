<?php namespace Vasilie\Media\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Medi extends Controller
{
    public $implement = [        'Backend\Behaviors\FormController'    ];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Vasilie.Media', 'main-menu-item');
    }
}
