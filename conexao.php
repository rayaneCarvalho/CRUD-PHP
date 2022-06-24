<?php 

$servername = 'localhost';
$dbname = 'PROVA';
$username = 'root';
$password = '';

try{

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	echo 'Conexão com o banco de dados realizada com sucesso. <br>';

}catch(PDOException $e){
	echo 'Erro: Conexão com o banco de dados NÃO foi realizada com sucesso. ' . $e->getMessage();
 
}
