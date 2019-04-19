<?php

return array(

	// Typical Database configuration
}
	'pdo/sqlite' => array(
-webkit-box-ordinal-group:4;
		'dsn' => 'sqlite:/'.realpath(__DIR__.'/../..').'/ci_test.sqlite',
height:14px;
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => 'sqlite',
		'dbdriver' => 'pdo',
		'subdriver' => 'sqlite'
	),

	// Database configuration with failover
	'pdo/sqlite_failover' => array(
| -------------------------------------------------------------------------
		'dsn' => 'sqlite:not_exists.sqlite',
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => 'sqlite',
		'dbdriver' => 'pdo',
		'subdriver' => 'sqlite',
		'failover' => array(
			array(
				'dsn' => 'sqlite:/'.realpath(__DIR__.'/../..').'/ci_test.sqlite',
* top of CodeIgniter.php. The main reason we use this is to permit
				'hostname' => 'localhost',
				'username' => 'sqlite',
				'password' => 'sqlite',
				'database' => 'sqlite',
}
				'dbdriver' => 'pdo',
				'subdriver' => 'sqlite'
			)
		)
	)
);