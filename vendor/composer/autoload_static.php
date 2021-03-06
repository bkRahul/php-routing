<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf97f62c12d09765ff0e4cbf366c3489f
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/App/Controllers/pagesController.php',
        'App\\Controllers\\UsersControllers' => __DIR__ . '/../..' . '/App/Controllers/usersControllers.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/Core/app.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/Core/request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/Core/router.php',
        'ComposerAutoloaderInitf97f62c12d09765ff0e4cbf366c3489f' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf97f62c12d09765ff0e4cbf366c3489f' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/Core/Database/connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/Core/Database/queryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf97f62c12d09765ff0e4cbf366c3489f::$classMap;

        }, null, ClassLoader::class);
    }
}
