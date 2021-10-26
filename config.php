<?php

$host=getenv("MYSQL_SERVICE_HOST");
$port=getenv("MYSQL_SERVICE_PORT");
$user=("databaseuser");
$pass=("databasepassword");
$db=("databasename");

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("notconnected");
}

else
{

	echo("connected");

}

?>