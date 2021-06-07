<?php namespace Szb\Jegyzet;
/** 
*\Brief Pluginbase
*Basic plugin config, registering components in this file
* \class PluginBase
*/


use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /** \brief Registering components of this plugin
      * \param none
      * \return the components name
    */
    public function registerComponents()
    {
        return [
            'Szb\Jegyzet\Components\Contact' => 'contactform', /*!< Registering and give name for contactform component */
            'Szb\Jegyzet\Components\Search' => 'searchForm', /*!< Registering and give name for searchForm component */
            'Szb\Jegyzet\Components\Uploadnote' => 'uploadnote', /*!< Registering and give name for uploadnote component */
        ];
    }

    /** \brief registring settings of plugin
      * \param none
      * \return  none
    */
    public function registerSettings()
    {
    }
}
