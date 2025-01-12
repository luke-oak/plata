<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2edab3454c30e273fc29dc1cb12cf6cb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sonata\\GoogleAuthenticator\\' => 27,
        ),
        'G' => 
        array (
            'Google\\Authenticator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sonata\\GoogleAuthenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
        'Google\\Authenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2edab3454c30e273fc29dc1cb12cf6cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2edab3454c30e273fc29dc1cb12cf6cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2edab3454c30e273fc29dc1cb12cf6cb::$classMap;

        }, null, ClassLoader::class);
    }
}
