<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "123";
	$dbname = "uniplast";
	
	// Create connection

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	// mysql_select_db('uniplast');
	// mysql_query("SET NAMES 'utf8'");
	// mysql_query('SET character_set_connection=utf8');
	// mysql_query('SET character_set_client=utf8');
	// mysql_query('SET character_set_results=utf8');

	// // Check connection

	// if ($conn->connect_error) {
	// 	die("Connection failed: " . $conn->connect_error);
	// 	}
		
	// 	echo "Connected successfully";
		
	// 	mysqli_close($conn);

 ?>