<?php
include 'DB.php';
include 'DBQuery.php';
class Model
{
	public static $db;
	public static $query;

	public function __construct()
	{
		self::$db = DB::connect('mysql:dbname=mvc;host=localhost', 'root', '');
    	self::$query = new DBQuery(self::$db);
	}
	public function getAllItems($tablename)
	{
		return self::$query->queryAll('SELECT * from ' . $tablename . '');
	}
}

 ?>
