<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb971fbc8ef1689cdebce66c874d42f9
{
    public static $files = array (
        '4dd9c0311cd4b5a64fe8930807fa6eef' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Taxonomy_Taxi\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Taxonomy_Taxi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Taxonomy_Taxi',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb971fbc8ef1689cdebce66c874d42f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb971fbc8ef1689cdebce66c874d42f9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}