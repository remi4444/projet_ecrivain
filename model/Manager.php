<?php


class Manager
{
	private static $_db = null;
	protected function dbConnect()
	{
		try
		{
			if(self::$_db == null)
			{
				self::$_db = new PDO('mysql:host=db756209793.db.1and1.com;dbname=db756209793;charset=utf8', 'dbo756209793', 'Lerem44-');
				//self::$_db = new PDO('mysql:host=localhost;dbname=projet_ecrivain;charset=utf8', 'root', 'root');
			}
			
		    return self::$_db;
		}
		

    	catch(Exception $e)
		{
		    die('Erreur : '.$e->getMessage());
		}
	}
}



//$db = new PDO('mysql:host=db756209793.db.1and1.com;dbname=db756209793;charset=utf8', 'dbo756209793', 'Lerem44-');
//$db = new PDO('mysql:host=localhost;dbname=projet_ecrivain;charset=utf8', 'root', 'root');

