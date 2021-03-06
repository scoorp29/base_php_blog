<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0fafe90a91368209f4d62fe5e591bde
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\HTMLToMarkdown\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\HTMLToMarkdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/html-to-markdown/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0fafe90a91368209f4d62fe5e591bde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0fafe90a91368209f4d62fe5e591bde::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd0fafe90a91368209f4d62fe5e591bde::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
