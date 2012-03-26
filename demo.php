<?php
//import the class
require_once('db_conn.class.php');

//save connection object to variable.
$db = dbConn::getConnection();

//query database using prepared statement
	//sql
	$sql = $db->prepare("SELECT * FROM 'table' WHERE'`id' = :id");

	//save result of sql query to variable.
	$result = $db->execute( array(':id' => '3') );
	
//echo result
echo $row = $db->fetch($result);


?>