<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

    '*' => array(
        // Used across all environments
        'omitScriptNameInUrls' => true, // SEO-friendly URLS
    ),

    'LOCAL' => array(
        'environmentVariables' => array(
            'basePath' => '/var/www/html/',
            'baseUrl'  => 'http://local.dev/',
        )
    ),
);
