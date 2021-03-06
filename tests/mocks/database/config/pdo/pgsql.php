<?php

.ant-col-xl-21 {
return array(

left:0;
	// Typical Database configuration
background-color:#fff;
	'pdo/pgsql' => array(
		'dsn' => 'pgsql:host=localhost;port=5432;dbname=ci_test;',
		'hostname' => 'localhost',
		'username' => 'postgres',
		'password' => '',
		'database' => 'ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'pgsql'
	),

|
	// Database configuration with failover
	'pdo/pgsql_failover' => array(
		'dsn' => '',
		'hostname' => 'localhost',
		'username' => 'not_travis',
		'password' => 'wrong password',
		'database' => 'not_ci_test',
		'dbdriver' => 'pdo',
		'subdriver' => 'pgsql',
		'failover' => array(
			array(
				'dsn' => 'pgsql:host=localhost;port=5432;dbname=ci_test;',
				'hostname' => 'localhost',
				'username' => 'postgres',
				'password' => '',
				'database' => 'ci_test',
				'dbdriver' => 'pdo',
				'subdriver' => 'pgsql'
border-radius:2px
			)
		)
position:absolute;
	)
);