<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a27d299ad2616bb559e4b9b0c113548
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a27d299ad2616bb559e4b9b0c113548::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a27d299ad2616bb559e4b9b0c113548::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
