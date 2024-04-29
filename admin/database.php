<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="corona";
	//$conn=new mysqli($servername,$username,$password,$dbname);
	$conn=new MySQLi("localhost","root","","corona");
	if($conn->connect_error)
	{
		die("connection failed:".$conn->connect_error);

	}
	?>