<?php namespace Szb\Jegyzet\Tests;
/**
*\Brief 
*Unit test for my plugin
*use October CMS PluginTestCase namespace
*\class Jegyzet\Note, Plugin, ComponentBase, PluginTEstCase
*/
use Szb\Jegyzet\Models\Note;
use Szb\Jegyzet\Plugin;
use Cms\Classes\ComponentBase;
use PluginTestCase;


class PostTest extends PluginTestCase
{
    public function setUp(): void
    {
        parent::setUp();

         /*!< // Get the plugin manager */
        $pluginManager = PluginManager::instance();

        /*!< Register the plugins to make features like file configuration available */

        $pluginManager->registerAll(true);

         /*!<  Boot all the plugins to test with dependencies of this plugin */

        $pluginManager->bootAll(true);
    }

    public function tearDown(): void
    {
        parent::tearDown();

         /*!< // Get the plugin manager */
        $pluginManager = PluginManager::instance();

         /*!< // Ensure that plugins are registered again for the next test */
        $pluginManager->unregisterAll();
    }
    
}
