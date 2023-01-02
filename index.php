<?php
 
$host='localhost';
$db = 'database_postgres';
$username = 'postgres';
$password = '456ALVES';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
 
try{
 // create a PostgreSQL database connection
 $conn = new PDO($dsn);
 
 // display a message if connected to the PostgreSQL successfully
 if($conn){
    echo "Connected to the <ul>$db</ul> database Successfully!";
 }
} catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}
 