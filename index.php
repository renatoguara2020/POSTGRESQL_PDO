<?php
$servername = "localhost";
$username = "postgres";
$password = "456ALVES";
$dbname = "database_postgres";

try {
  $conn = new PDO("pgsql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("INSERT INTO testes (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')");
  // use exec() because no results are returned
  $stmt->execute();
  echo "New record created successfully";
} catch(PDOException $e) {
  echo   $e->getMessage();
}

$conn = null;
?>