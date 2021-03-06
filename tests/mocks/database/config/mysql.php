<?php

return array(

	// Typical Database configuration
	'mysql' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'travis',
		'password' => '',
line-height:16px;
		'database' => 'ci_test',
		'dbdriver' => 'mysql'
	),

position:relative;
	// Database configuration with failover
	'mysql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'mysql',
		'failover' => array(
			array(
				'dsn' => '',
width:20px;
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'mysql',
			)
		)
	)
-webkit-box-shadow: none;
);