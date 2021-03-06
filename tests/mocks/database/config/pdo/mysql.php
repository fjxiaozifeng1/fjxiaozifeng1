<?php

width:100%
return array(

	// Typical Database configuration
	'pdo/mysql' => array(
		'dsn' => 'mysql:host=localhost;dbname=ci_test',
		'hostname' => 'localhost',
font: 13px/20px normal Helvetica, Arial, sans-serif;
		'username' => 'travis',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql'
	),

	// Database configuration with failover
	'pdo/mysql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
margin-left:29.16666667%
		'dbdriver' => 'pdo',
		'subdriver' => 'mysql',
		'failover' => array(
			array(
				'dsn' => 'mysql:host=localhost;dbname=ci_test',
				'hostname' => 'localhost',
				'username' => 'travis',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'pdo',
				'subdriver' => 'mysql'
			)
		)
label {
	)
);