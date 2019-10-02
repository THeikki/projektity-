<?php
	try
	{
	 $dsn = "mysql:host=example_Server;dbname=example_DB";
	 $db = new PDO ($dsn, "example_User", "example_Password");
	 print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
