<?php
	if (isset($_POST['Register']))
	{
		include_once('conexao.php');

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");
	}
?>