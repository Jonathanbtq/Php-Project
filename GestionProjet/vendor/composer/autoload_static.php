<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit928bc63f902116212325b6b80ea4e153
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Formation\\MonApp\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Formation\\MonApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit928bc63f902116212325b6b80ea4e153::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit928bc63f902116212325b6b80ea4e153::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit928bc63f902116212325b6b80ea4e153::$classMap;

        }, null, ClassLoader::class);
    }
}
