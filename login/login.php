<?php
	include('conexao.php');
    
	if(isset($_POST['email']) ||  isset($_POST['senha'])){
		
		if(strlen($_POST['email']) == 0) {
			echo "prencha seu email";
		} else if (strlen($_POST['senha']) == 0) {
			echo "prencha sua senha";
		}else{
			
			$email = $mysql->real_escape_string($_POST['email']);
			$senha = $mysql->real_escape_string($_POST['senha']);
			
			$sql_code = "SELECT * FROM usuario WHERE email = '$email' and senha ='$senha'"; 
			$sql_query = $mysql->query($sql_code) or die ("falha na execução do codigo SQL: " . $mysql->error);
		
			$quantidade = $sql_query->num_rows;	

			if ($quantidade == 1) {		
				
				$usuario = $sql_query->fetch_assoc();

				if(!isset($_SESSION)) {
					session_start();
				}

				$_SESSION['id'] = $usuario['id'];
				$_SESSION['nome'] = $usuario['nome'];

                header('Location: /expotec/painel/index.html');
                exit();
			}else {
                header("location: http://localhost:85/expotec/login/index.php");
			}
		
		}	
	}
?>
