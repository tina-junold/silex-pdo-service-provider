<?php

namespace IPC\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class PDOServiceProvider implements ServiceProviderInterface
{

    /**
     * Register the pdo connection
     *
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['pdo.default_options'] = [
            'dsn'      => '',
            'username' => '',
            'password' => null,
            'options'  => []
        ];

        $app['pdo.connection'] = function ($app) {
            $options =  $app['pdo.options'];
            return new \PDO($options['dsn'], $options['username'], $options['password'], $options['options']);
        };
    }
}
