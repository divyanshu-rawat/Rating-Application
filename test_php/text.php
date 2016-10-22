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

#prepare statement 


// $stmt = $connection->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");


// $stmt->bind_param(sss,$firstname,$lastname,$email);









// echo "Connected succesfully !!";


// if(mysqli_connect_errno())
// {
// 	die("Connection Faild: " . $connection->connect_error);
// }

// echo "Connected succesfully !!";



// The PDO Way !!!!

// try{

// 	$connection = new PDO("mysql:host = localhost;dbname = login_register", "root", "");
// 	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	// setAttribute(ATTRIBUTE, OPTION);
//     echo "Connected successfully";


//         $sql = "SELECT * FROM users";
//         $statement= $connection->prepare($sql);
//         $statement->execute();
//         $result = $statement->fetchAll();
//         print_r($result);


// }

// catch(PDOException $e)
// {
// 	    echo "Connection failed: " . $e->getMessage();
// }

try {
    $dbh = new PDO('mysql:host=localhost;dbname=login_register', "root", "");
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>