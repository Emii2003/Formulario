<!DOCTYPE HTML> 
<html lang=”pt-br”>
 <head> 
			<meta charset=”UTF-8”>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
			<title></title>

			<style>
		body{
			background-color: #FFADAD;
		}
		form{
			display: flex;
			justify-content: center;
			flex-direction: column;
			align-items: center;
			background-color: #FDFFB6;
			width: 20%;
			padding: 15px;
			margin-top: 10%;
			border-radius: 10px;

		}

		label{
			display: flex;
			margin: 5px;
			align-items: center;
			background-color: transparent;
			width: 80%;

		}
		input{
			display: flex;
			margin: 5px;
			align-items: center;
			background-color: transparent;
			border: none;
			border-bottom: 1px solid #000;
			width: 80%;
		}
		button{
			margin-top: 8px;
			width: 75px;
			height: 25px;
			border: 1px solid #000;
			border-radius: 5px;
			background-color: transparent;
			color: #19194d;
			font-size: 0.9em;
		}
	</style>

		<?php
			require_once "model/Principal.php";
			$principal = new Principal();

		?>

 </head>

	 <body> 

	 	<center>			
		<form method="POST" action="" > 
			<input type = "text" name = "txtNome" placeholder="Digite seu nome" required>
			<br><br>
			<input type = "text" name = "txtRg" placeholder="Digite seu RG" required>
			<br><br>
            <input type = "text" name = "txtCpf" placeholder="Digite seu CPF" required>
			<br><br>
            <input type = "text" name = "txtEmail" placeholder="Digite seu Email" required>
			<br><br>
			<label> Digite sua data de nascimento: </label>
            <input type = "date" name = "date">
			<br><br>
			<button type="submit"> Acessar </button> 
		</form>
		</center>	
	 </body>

</html>
