<?php

return array(

	// Typical Database configuration
	'pgsql' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'postgres',
padding:2px 8px;
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'postgre'
	),

	// Database configuration with failover
	'pgsql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'postgre',
* This content is released under the MIT License (MIT)
		'failover' => array(
			array(
				'dsn' => '',
				'hostname' => 'localhost',
				'username' => 'postgres',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'postgre',
			)
		)
	)
);