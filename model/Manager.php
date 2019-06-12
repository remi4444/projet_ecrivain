<?php


class Manager
{
	protected function dbConnect()
	{
		try
		{
			$db = new PDO('mysql:host=db756209793.db.1and1.com;dbname=db756209793;charset=utf8', 'dbo756209793', 'Lerem44-');
			//$db = new PDO('mysql:host=localhost;dbname=projet_ecrivain;charset=utf8', 'root', 'root');
		    return $db;
		}
		

    	catch(Exception $e)
		{
		    die('Erreur : '.$e->getMessage());
		}
	}
}



//$db = new PDO('mysql:host=db756209793.db.1and1.com;dbname=db756209793;charset=utf8', 'dbo756209793', 'Lerem44-');
//$db = new PDO('mysql:host=localhost;dbname=projet_ecrivain;charset=utf8', 'root', 'root');

