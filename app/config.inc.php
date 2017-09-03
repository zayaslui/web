<?php

	if($_ENV){
		$config['nombre_servidor'] = $_ENV['OPENSHIFT_MYSQL_DB_HOST'];
		$config['nombre_usuario'] = $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'];
		$config['password'] = $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'];
		$config['nombre_base_datos'] = $_ENV['OPENSHIFT_APP_NAME'];		
	}else{
		$config['nombre_servidor'] = 'localhost';
		$config['nombre_usuario'] = 'root';
		$config['password'] = 'admin';	
		$config['nombre_base_datos'] = 'turismo';
	}


	echo var_dump($config);
	// echo "-----------------------------------------------------------------------------";
	// echo var_dump($_ENV);

?>