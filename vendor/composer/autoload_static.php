<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fb40cb16b63f642efcf6edf62f1d722
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'PiramideUploader' => __DIR__ . '/../..' . '/piramide-uploader/PiramideUploader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit4fb40cb16b63f642efcf6edf62f1d722::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4fb40cb16b63f642efcf6edf62f1d722::$classMap;

        }, null, ClassLoader::class);
    }
}