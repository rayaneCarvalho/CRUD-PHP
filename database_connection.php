<?php 

$servername = 'localhost';
$dbname = 'PROVA';
$username = 'root';
$password = '';
$dsn = "mysql:host=$servername";

try{
	$conn = new PDO($dsn, $username, $password);

	$sql = "CREATE DATABASE $dbname";
	$conn->exec($sql);

	echo 'O banco de dados "$dbname" foi criado com sucesso. <br>';

}catch(PDOException $e){
	echo $sql . "<br>";
	echo $e->getMessage() . "<br>";
 
}

$conn = null;

?>