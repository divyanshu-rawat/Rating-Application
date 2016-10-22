<?php


// MySqli Procedural Way !!

// $connection = mysqli_connect("localhost", "root", "", "login_register");

// $query = mysqli_query($connection,"SELECT * FROM users WHERE username = 'divyanshu' ");
// $query_result = mysqli_fetch_assoc($query);
// $number_of_rows = mysqli_num_rows($query);
// echo $number_of_rows . "<br>";
// echo $query_result['last_name'];


// MySqli Object_Oriented_Way !!!

// $connection = new mysqli("localhost","root","","login_register");

// if($connection->connect_error)
// {
// 	die("Connection Faild: " . $connection->connect_error);
// }

// echo "Connected succesfully !!";


// if(mysqli_connect_errno())
// {
// 	die("Connection Faild: " . $connection->connect_error);
// }

// echo "Connected succesfully !!";



// The PDO Way !!!!

try{

	$connection = new PDO("mysql:host = 'localhost';dbname = 'login_register'", "root", "");
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// setAttribute(ATTRIBUTE, OPTION);
    echo "Connected successfully";
}

catch(PDOException $e)
{
	    echo "Connection failed: " . $e->getMessage();
}







?>