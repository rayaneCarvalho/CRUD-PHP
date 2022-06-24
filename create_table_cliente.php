<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prova";
$dsn = "mysql:host=$servername;dbname=$dbname";

try{

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$sql = "
		CREATE TABLE cliente (
			CD_CLIENTE 			INTEGER 		NOT NULL PRIMARY KEY AUTO_INCREMENT,
			NM_CLIENTE 			VARCHAR(100) 	NOT NULL,
			DC_CPF 				CHAR(11) 		NOT NULL,
			DC_TELL 			CHAR(9), 
			DC_EMAIL 			VARCHAR(100), 
			CD_MUNICIPIO 		INTEGER 		NOT NULL,
			CONSTRAINT FK_MUNICIPIO FOREIGN KEY REFERENCES contrato (CD_CONTRATO),
		);
		
		CREATE TABLE contrato(
			CD_CONTRATO 		INTEGER 		NOT NULL PRIMARY KEY AUTO_INCREMENT,
			VR_CONTRATO 		DECIMAL			NOT NULL,
			DT_ASS 				DATE 			NOT NULL,
			DT_INICIO 			DATE,
			DT_FIM 				DATE,
			DC_STATUS 			VARCHAR(50) 	NOT NULL,
		);

		CREATE TABLE assc_contrato_cliente(
			CD_CTO_CLI 			INTEGER 		NOT NULL PRIMARY KEY AUTO_INCREMENT,
			CD_CONTRATO 		INTEGER,		
			CD_CLIENTE 			INTEGER,		
			DT_RGST 			DATE,
			CONSTRAINT FK_CONTRATO FOREIGN KEY (CD_CONTRATO) REFERENCES contrato (CD_CONTRATO),
			CONSTRAINT FK_CLIENTE FOREIGN KEY (CD_CLIENTE) REFERENCES cliente (CD_CLIENTE)
		);
	";

	$conn->exec($sql);

	echo "A tabela \"cliente\" foi criada com sucesso";

}catch(PDOException $e){
	echo $sql . "<br>" . $e->getMessage();
}
?>