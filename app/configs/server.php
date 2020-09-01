<?php

/**
 * Read more on Config Files
 * @link http://phalcon-rest.redound.org/config_files.html
 */

return [

    'debug' => true,
    'hostName' => 'http://agro-pk.umbler.net',
    'clientHostName' => 'http://agro-pk.umbler.net',
    'database' => [

        // Change to your own configuration
        'adapter' => 'Mysql',
        'host' => 'mysql669.umbler.com',
        'username' => 'graphql',
        'password' => 'atecubanos',
        'dbname' => 'graphql',
    ],
    'cors' => [
        'allowedOrigins' => ['*']
    ]
];
