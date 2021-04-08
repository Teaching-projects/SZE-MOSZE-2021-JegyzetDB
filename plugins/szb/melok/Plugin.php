<?php namespace Szb\Melok;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Szb\Melok\Components\Creatad' => 'createAd'
        ];
    }

    public function registerSettings()
    {
    }

}

