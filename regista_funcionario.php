<?php

	$conexao = mysqli_connect("localhost", "root", "", "padaria");

	if(!$conexao){
		echo "Erro ao conectar com  banco de dados";
	}

	$nome = $_POST['nome'];
	$morada = $_POST['morada'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];

	$sql_cadastro = " INSERT INTO funcionario(nome, morada, telefone, senha) VALUES('$nome','$morada', '$telefone', '$senha') ";

	mysqli_query($conexao, $sql_cadastro);

	echo "registado com sucesso";
	mysqli_close($conexao);

?>
