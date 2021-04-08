<?php namespace Pixel\Shop\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Brands extends Controller
{
    public $implement = [
    	'Backend\Behaviors\ListController',
    	'Backend\Behaviors\FormController',
    	'Pixel\Shop\Behaviors\ModalContext'
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'pixel.shop.brands' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Pixel.Shop', 'shop', 'brands');
    }
}