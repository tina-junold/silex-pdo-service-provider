PDOServiceProvider
==================

Usage
-----

Define the configuration::

    <?php
        $config = [
            // ...
            'pdo.options' => [
                'dsn'        => 'mysql:host=localhost;dbname=sample;charset=UTF8',
                'username'   => 'user',
                'password'   => 'pass',
                'options'    => [],
                'attributes' => [],
            ],

            // ...

and register the service::

    <?php
        $app->register(new IPC\Silex\Provider\PDOServiceProvider(), ['pdo.options' => $config['pdo.options']]);

