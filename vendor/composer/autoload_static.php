<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79644a650bee30f3f168efc18fd4d726
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Adithwidhiantara\\Repository\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Adithwidhiantara\\Repository\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit79644a650bee30f3f168efc18fd4d726::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79644a650bee30f3f168efc18fd4d726::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79644a650bee30f3f168efc18fd4d726::$classMap;

        }, null, ClassLoader::class);
    }
}