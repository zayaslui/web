<?php

	if($_ENV){
		//version 2
		// $config['nombre_servidor'] = $_ENV['MYSQL_SERVICE_HOST'];
		// $config['nombre_usuario'] = $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'];
		// $config['password'] = $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'];
		// $config['nombre_base_datos'] = $_ENV['OPENSHIFT_APP_NAME'];
		//version 3
		$config['nombre_servidor'] = 'turismo.turismo.svc';
		$config['nombre_usuario'] = 'admin';
		$config['password'] = 'root';
		$config['nombre_base_datos'] = 'turismo';		
	
	}else{
		$config['nombre_servidor'] = 'localhost';
		$config['nombre_usuario'] = 'root';
		$config['password'] = 'admin';	
		$config['nombre_base_datos'] = 'turismo';
	}	

	echo "probando...";

	$dbhost = getenv("MYSQL_SERVICE_HOST");
	$dbport = getenv("MYSQL_SERVICE_PORT");
	$dbuser = getenv("MYSQL_USER");
	$dbpwd = getenv("MYSQL_PASSWORD");
	$dbname = getenv("MYSQL_DATABASE");
	$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
	if ($connection->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	} else {
	    printf("Connected to the database");
	}
	$connection->close();


?>