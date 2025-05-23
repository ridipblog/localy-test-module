<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2da02d7ae4ac3de0e4bb5e7ea5d5e89
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YourVendor\\MyPackage\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YourVendor\\MyPackage\\' => 
        array (
            0 => __DIR__ . '/..' . '/yourvendor/mypackage/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2da02d7ae4ac3de0e4bb5e7ea5d5e89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2da02d7ae4ac3de0e4bb5e7ea5d5e89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2da02d7ae4ac3de0e4bb5e7ea5d5e89::$classMap;

        }, null, ClassLoader::class);
    }
}
