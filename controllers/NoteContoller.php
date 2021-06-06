<?php namespace Szb\Jegyzet\Controllers;

/**
*\Brief 
*Jegyzet Controller
*
*\class Controller, Backendmanu
*
*/

use Backend\Classes\Controller;
use BackendMenu;


class NoteContoller extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ]; 
    /*!< implemnt backend menu options in CMS */
    
    public $listConfig = 'config_list.yaml'; /*!< config list form list model data in CMS */
    public $formConfig = 'config_form.yaml'; /*!< config the form CRUD options in CMS */
    public $reorderConfig = 'config_reorder.yaml'; /*!< Record config options */

    /** \brief constructor for set backend manu URL and backend CMS area
      * \param none
      * \return none
    */
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Szb.Jegyzet', 'main-menu-item');
    }
}
