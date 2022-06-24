<?php

session_start();

ob_start();

include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

if(!empty($dados['cadCliente'])){
	$query_cliente = "INSERT INTO cliente (NM_CLIENTE, DC_CPF, DC_TELL, DC_EMAIL, CD_MUNICIPIO) VALUES (:nome, :cpf, :telefone, :email, :municipio)";
	$cad_cliente = $conn->prepare($query_cliente);
	$cad_cliente->bindParam(':nome', $dados['NM_CLIENTE']);
	$cad_cliente->bindParam(':cpf', $dados['DC_CPF']);
	$cad_cliente->bindParam(':telefone', $dados['DC_TELL']);
	$cad_cliente->bindParam(':email', $dados['DC_EMAIL']);
	$cad_cliente->bindParam(':municipio', $dados['CD_MUNICIPIO']);

}else{
	echo"Erro";
}















?>