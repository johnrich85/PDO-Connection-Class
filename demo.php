<?php
//import the class
require_once('db_conn.class.php');

//save connection object to variable.
$db = dbConn::getConnection();

//query database using prepared statement
	//sql
	$sql = $db->prepare("SELECT * FROM 'table' WHERE column = :id");

	//save result of sql query to variable.
	$result = $sql->execute( array(':id' => '1') );
	
//echo result
$row = $sql->fetch();
echo $row[0];


?>