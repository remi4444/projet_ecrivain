<?php


class Manager
{
	protected function dbConnect()
	{
		try
		{
		    $db = new PDO('mysql:host=localhost;dbname=projet_ecrivain;charset=utf8', 'root', 'root');
		    return $db;
		}

    	catch(Exception $e)
		{
		    die('Erreur : '.$e->getMessage());
		}
	}
}