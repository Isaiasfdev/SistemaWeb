<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ies</title>
	<style>
		body{
			background-color: #749ba8;
		}
		form{
			width: 100%;
			text-align: center;
			margin-top: 15%;
			height: 200px;
		}
		form label{
			display: block;
			margin-bottom: 30px;
			font-family: Andale mono, monospace;
			color: white;
			font-size: 30px;
		}
		form input[type=text]{
			width: 250px;
			padding: 5px;
			border-radius: 5px;
			border: 1px solid white;
			outline: 0;
			margin-right: 20px;
			position: relative;
			margin-top: 30px;
		}
		form input[type=text]:focus{
			border: 1px solid blue;
		}
		form input[type=submit]{
			width: 40px;
			height: 30px;
			color: transparent;
			background-color: transparent;
			border: transparent;
			background-image: url('imagens/search.png');
			background-size: 30px 30px;
			background-repeat: no-repeat;
			cursor: pointer;
		}
		form input[type=submit]:hover{

		}
		a{
			color: transparent;
			text-decoration: none;
			font-family: Andale mono, monospace;
			position: relative;
			left: 1203px;
			bottom: 10px;
		}
		a:hover{
			transition: 1s;
			color: white;
		}
		a img{
			position: relative;
			right: 5px;
			top: 8px;
			width: 30px;
			height: 30px;
		}

	</style>
</head>
<body>
	<a href="index.php"><img src="imagens/anterior.png">Voltar</a>
	<form method="GET" action="disciplina_escolhida.php"> 
		<label>Digite a disciplina que procura</label>
		<input type="text" name="disciplina" placeholder="Ex: PDM" required >
		<input type="submit">
	</form>
</body>
</html>