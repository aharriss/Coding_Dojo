<?php
//define constants for db_bost, db_user, db_pass, and db_database
//adjust the values below to match your database settings

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //set DB_PASS as 'root' if you're using mac
define('DB_DATABASE', 'people'); //make sure to set your database

//connection to database host
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

//make sure connection is good or die
if ($connection->connect_errno)
{
	die("Failed to connect to MySQL: (" . $connection->connect_erno . ") " . $connection->connect_error);
}
else
{
	echo "we are working with a database!";
}

//END OF CONNECTION PROCESS!
//BELOW ARE THE CUSTOM FUNCTIONS WE HAVE PRE-WRITTEN YOU TO USE IN QUERYING YOUR DATABASES!
//used when expecting multiple results
function fetch_all($query)
{
	$data = array();
	global $connection;
	$result = $connection->query($query);

	while($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row;
	}
	return $data;
}
//use when expecting a single result
function fetch_record($query)
{
	global $connection;
	$result = $connection->query($query);
	return mysqli_fetch_assoc($result);
}

//use to run INSERT/DELETE/UPDATE, queries that don't return a value
function run_mysql_query($query)
{
	global $connection;
	$result = $connection->query($query);
}
?>