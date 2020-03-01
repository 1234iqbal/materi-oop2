<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7c4882c84316839a8c6fadfc4a7b9c6
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kodingAcademy\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kodingAcademy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7c4882c84316839a8c6fadfc4a7b9c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7c4882c84316839a8c6fadfc4a7b9c6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}