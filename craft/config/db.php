<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	'*' => array(
		// Used across all environments
	),

	'LOCAL' => array(
		// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
		'server' => '127.0.0.1',

		// The name of the database to select.
		'database' => 'craftcms',

		// The database username to connect with.
		'user' => 'dbuser',

		// The database password to connect with.
		'password' => '123',

		// The prefix to use when naming tables. This can be no more than 5 characters.
		'tablePrefix' => '',
	),

);