<?php
	// if (isset($_POST['submit']))
	// {
	// 	include_once('conexao.php');

	// 	$nome = $_POST['nome'];
	// 	$email = $_POST['email'];
	// 	$senha = $_POST['senha'];

	// 	$result = mysqli_query($conexao, "INSSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')");
	// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>login &reg; </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post" action="http://localhost:85/expotec/login/login.php" auto_complete="off"> 
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input method="post" type="text" class="input" name="email">
					</div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="senha">
            	   </div>
            	</div>
            	<a href="#">Redefinir Senha</a>
				<a href="https://www.nike.com">registrar</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>