<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<!-- script para visualizar senha -->
	<script> 	function show() {
  	var senha = document.getElementById("senha");
  	if (senha.type === "password") {
    	senha.type = "text";
  	} else {
    	senha.type = "password";
  		}
	}
	</script>
	<!-- fim script -->
	<!-- Estilo do formulario de cadastro -->
	<style>
		body{
			background-image: url("imagens/imagemfundo4.png");
			background-repeat: no-repeat;
			background-size: 100% 660px;
			overflow-y: hidden;
		}
		form{
			position: relative;
			left: 250px;
			width: 1000px;
			height: 600px;
		}
		fieldset{
			border: none;
			height: 620px;
			
		}
		legend{
			color: blue;
			font-family: cursive;
			font-size: 50px;
			margin-left: 350px;
			margin-bottom: 20px;
			animation-name: legend;
			animation-duration: 2s;
			position: relative;
			top: 40px;
		}
		#p{
			position: relative;
			bottom: 65px;
			left: 80px;
			font-size: 20px;
			font-weight: bold;
		}
		input{
			outline: 0;
			border-radius: 5px;
			border-color: blue;
			padding-left: 10px;
			padding: 8px;
		}
		.label1{
			font-family: cursive;
			font-size: 20px;
			margin-left: 80px;
			margin-right: 10px;
		}
		.cadastro{
			position: relative;
			right: 50px;
			top: 150px;
		}
		.box{
			position: relative;
			left: 400px;
			bottom: 100px;
			margin-top: 40px;
			width: 520px;
			height: 330px;
			margin-left: 40px;
		}
		/* esp de espaçamento entre os periodos matutino e noturno*/
		#esp1{
			margin-left: 170px;
			font-size: 20px;
		}
		#esp2{
			margin-left: 130px;
			font-size: 20px;

		}
		/* fim */
		.box input{
			padding: 7px;
			margin-bottom: 20px;
			margin-left: 10px;
		}
		fieldset a{
			background-color: white;
			font-family: cursive;
			text-decoration: none;
			border: 1px solid blue;
			border-radius: 5px;
			padding: 10px;
			box-shadow: 1px 3px 2px black;
			position: relative;
			left: 200px;
			bottom: 120px;
		}
		fieldset input[type=submit]{
			letter-spacing: 1px;
			padding: 11px 20px;
			border: 1px solid blue;
			border-radius: 5px;
			font-family: cursive;
			box-shadow: 1px 3px 2px black;
			background-color: white;
			color: #593782;
			font-size: 15px;
			font-weight: bold;
			cursor: pointer;
			position: relative;
			left: 450px;
			bottom: 120px;
		}
		fieldset a:hover, input[type=submit]:hover{
			background-color: #8184db;
			color: white;
		}
		@keyframes legend {
			from{
				margin-left: 10px;
				color: white;
			}
			to{
				margin-left: 350px;
				color: blue;
			}
		}
	</style>
	<!-- fim estilo -->
</head>

<body>
	<form method="post" action="cadastroProfessor.php">
		<fieldset>
		<legend>Cadastro</legend>
		<div class="cadastro">
		<p id="p">Crie uma conta e cadastre suas aulas!</p>
		<label class="label1">Digite um código:</label>
		<input type="text" name="codigo" placeholder="Ex: 1234567" pattern="[0-9]+$" required="">
		<br>
		<label class="label1">Digite seu nome:</label>
		<input style="margin: 15px 0 0 7px; " type="text" name="nome" placeholder="Ex: José Silva"required>
		<br>
		<label class="label1">Crie uma senha:</label>
		<img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" onclick="show()"
		style="width: 30px; height: 30px; position: relative; left: 175px; top: 10px;">
		<input style="margin: 15px 0 0 -18px;" type="password" name="senha" id="senha" required>
        </div>
		<div class="box">
		<span id="esp1">Matutino</span>
		<span id="esp2">Noturno</span>
		<br>
		<br>
		<span style="margin-right: 10px;">Segunda-feira:</span>
		<input type="text" name="segm" placeholder="Ex: PW,1°C/2°C,ADS,AF">
		<input type="text" name="segn">
		
		<span style="margin-right: 30px;">Terça-feira:</span>
		<input type="text" name="tercam">
		<input type="text" name="tercan">
		
		<span style="margin-right: 22px">Quarta-feira:</span>
		<input type="text" name="quartam">
		<input type="text" name="quartan">
		
		<span style="margin-right: 22px">Quinta-feira:</span>
		<input type="text" name="quintam">
		<input type="text" name="quintan">
		
		<span style="margin-right: 30px">Sexta-feira:	</span>
		<input type="text" name="sextam">
		<input type="text" name="sextan">
		</div>
		
		<a href="index.php">Pagina Inicial</a>
		<input type="submit" name="acao" value="Cadastrar">
		</fieldset>
		
	</form>
</body>
</html>