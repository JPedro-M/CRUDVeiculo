<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):	
	$marca = mysqli_escape_string($connect, $_POST['marca']);
	$modelo = mysqli_escape_string($connect, $_POST['modelo']);
	$ano = mysqli_escape_string($connect, $_POST['ano']);
	$cor = mysqli_escape_string($connect, $_POST['cor']);
	$placa = mysqli_escape_string($connect, $_POST['placa']);
	$motor = mysqli_escape_string($connect, $_POST['motor']);
	$km = mysqli_escape_string($connect, $_POST['km']);
	$valor = mysqli_escape_string($connect, $_POST['valor']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE tbveiculo SET marca = '$marca', modelo = '$modelo', ano = '$ano', cor = '$cor', placa = '$placa', motor = '$motor', km = '$km', valor = '$valor' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../veiculo.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../veiculo.php');
	endif;
endif;