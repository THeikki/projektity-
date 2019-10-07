<?php
	try
	{
	 $dsn = "mysql:host=localhost;dbname=t9tohe00";
	 $db = new PDO ($dsn, "t9tohe00", "Zakkeus1984");
	 print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
