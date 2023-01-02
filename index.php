<?php
 
$host='localhost';
$db = 'database_postgres';
$username = 'postgres';
$password = '456ALVES';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
 
try{
   $firstname = 'RENATO ALVES';
   $lastname = 'RENATO ALVES';
   $email = 'RENATO ALVES';
 // create a PostgreSQL database connection
 $conn = new PDO($dsn);
 
 // display a message if connected to the PostgreSQL successfully
 if($conn){
    
    $sql = ("INSERT INTO testes (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");

$stmt = $conn->prepare($sql);
$stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);

$stmt->execute();

echo "Connected to the <strong>$db</strong> database Successfully!";
 }
} catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}
 

/ prepare statement for insert
$sql = 'INSERT INTO tblemployee (employeenumber,firstname,lastname,email) VALUES (:employeenumber,:firstname,:lastname,:email)';
$stmt = $pdo->prepare($sql);

// pass values to the statement
$stmt->bindValue(':employeenumber', $employeenumber);
$stmt->bindValue(':firstname', $firstname);
$stmt->bindValue(':lastname', $lastname);
$stmt->bindValue(':email', $email);

// execute the insert statement
$stmt->execute();