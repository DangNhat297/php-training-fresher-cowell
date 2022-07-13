<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefd61587b3fee7688a47d3911faaed2d
{
    public static $files = array (
        '0d1dce1de2bf0367ce35775861cc3b44' => __DIR__ . '/../..' . '/lib/Route.php',
        'd66f357ab0a91e918ee58031f88ff739' => __DIR__ . '/../..' . '/app/Helpers/global.func.php',
        '76800ec796b29991dd8e8174aa358469' => __DIR__ . '/../..' . '/app/Helpers/core.func.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitefd61587b3fee7688a47d3911faaed2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefd61587b3fee7688a47d3911faaed2d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefd61587b3fee7688a47d3911faaed2d::$classMap;

        }, null, ClassLoader::class);
    }
}
