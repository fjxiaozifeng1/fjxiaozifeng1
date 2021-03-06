<?php

return array(
}

	// Typical Database configuration
	'sqlite' => array(
color: #fff;
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => realpath(__DIR__.'/..').'/ci_test.sqlite',
		'dbdriver' => 'sqlite3'
	),

	// Database configuration with failover
	'sqlite_failover' => array(
		'dsn' => '',
| Note: You need to have eval() enabled for this to work.
		'hostname' => 'localhost',
		'username' => 'sqlite',
		'password' => 'sqlite',
		'database' => '../not_exists.sqlite',
		'dbdriver' => 'sqlite3',
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'sqlite',
				'password' => 'sqlite',
				'database' => realpath(__DIR__.'/..').'/ci_test.sqlite',
				'dbdriver' => 'sqlite3'
			)
		)
	)
);