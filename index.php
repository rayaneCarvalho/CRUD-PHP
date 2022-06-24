<?php

$servername = "localhost";
$dbname = "PROVA";
$username = "root";
$password = "";
$dsn = "mysql:host=$servername;dbname=$dbname";


try{
	$conn = new PDO($dsn, $username, $password);
	echo "<p>Conexão realizada com sucesso.</p>";
}catch(PDOException $e){
	echo "<pre>";
	print_r($e);
	echo "</pre>";

	echo "<p>Não foi possível realizar a conexão: " . $e->getCode(). "</p>";
}

?>
<<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Contratos</title>
</head>
<body>

	<h1>Cadastrar Cliente</h1>

	<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

	<form method="POST" action="processa.php">
		<h3>Dados Pessoais</h3>
		<label>Nome:</label>
		<input type="text" name="nome" id="nome">
		<br>
		<label>CPF:</label>
		<input type="text" name="cpf" id="cpf" maxlength="11">
		<br>
		<label>Tel:</label>
		<input type="telefone" name="telefone" id="telefone" maxlength="9">
		<br>
		<label>Email:</label>
		<input type="email" name="email" id="email">
		<br>
		<label>UF:</label>
		<input type="municipio" name="municipio" id="municipio">
		<br>
		<br>


		<h3>Dados Contratuais</h3>
		<label>Valor do Contrato:</label>
		<input type="number" name="valor" id="valor" step="0.01">
		<br>
		<label>Data da Assinatura:</label>
		<input type="date" name="dateAss" id="dateAss">
		<br>
		<label>Data do Registro:</label>
		<input type="date" name="dateReg" id="dateReg">
		<br>
		<label>Data do Inicio:</label>
		<input type="date" name="dateIni" id="dateIni">
		<br>
		<label>Data do Fim:</label>
		<input type="date" name="dateFim" id="dateFim">
		<br>
		<label>Status: </label> 
		<input type="radio" name="status" id="status"> A - Ativo		
		<input type="radio" name="status" id="status"> D - Distratado 
		<br><br><br>


		<input type="submit" value="Cadastrar" name="cadCliente">
	</form>

</body>
</html>
