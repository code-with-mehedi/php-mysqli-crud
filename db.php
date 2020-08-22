<?php 
$host='localhost';
$user='root';
$pass='';
$dbname='basic_crud';

$con=new mysqli( $host, $user, $pass, $dbname );

if( $con->connect_error ) {
	echo "Database connection failed".$con->connect_error;
}
