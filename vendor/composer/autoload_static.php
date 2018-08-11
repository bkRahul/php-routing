<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf97f62c12d09765ff0e4cbf366c3489f
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/Core/Database/connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/Core/Database/queryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/Core/request.php',
        'Router' => __DIR__ . '/../..' . '/Core/router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf97f62c12d09765ff0e4cbf366c3489f::$classMap;

        }, null, ClassLoader::class);
    }
}
