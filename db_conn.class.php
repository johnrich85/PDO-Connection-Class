<?php

//db connection class using singleton pattern
class dbConn{
	
	//variable to hold connection object.
	protected static $db;
		
	private function __construct() {
		
			try {
				// assign PDO object to db variable 
				self::$db = new PDO( 'mysql:host=localhost;dbname=DBNAME', 'USERNAME', 'PASSWORD' );
				self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			}
			catch (PDOException $e) {
				echo "Connection Error: " . $e->getMessage();
			}
		
	}
	
	// get connection function.
	public static function getConnection() {
		
		//if connection doesnt exist already, create one.
		if (!self::$db) {
			new dbConn();
		}
		
		//return connection.
		return self::$db;
	}
	
	
	
}//end class

?>