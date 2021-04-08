<?php namespace Szb\Contactform;

use Backend;
use System\Classes\PluginBase;

/**
 * Contactform Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Contactform',
            'description' => 'No description provided yet...',
            'author'      => 'Szb',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Szb\Contactform\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'szb.contactform.some_permission' => [
                'tab' => 'Contactform',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'contactform' => [
                'label'       => 'Contactform',
                'url'         => Backend::url('szb/contactform/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['szb.contactform.*'],
                'order'       => 500,
            ],
        ];
    }
}
