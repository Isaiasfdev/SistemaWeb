<!DOCTYPE html>
<html lang="PT">
<head>
	<meta charset="utf-8">
	<title>Sistema IES</title>
	<style>
*{
	margin: 0;
	padding: 0;
}
body{
	background-image: url("imagens/imagemfundo2.jpg");
	background-repeat: no-repeat;
	background-size: 100% 658px;
	width: 100%;
	overflow-y: hidden;
	overflow-x: hidden;
}
header{
	font-family: cursive;
	margin: 0 auto;
	box-sizing: border-box;
	text-align: left;
	width: 100%;
	height: 100px;
	background-color: #353a82;
	padding: 20px;
	margin-bottom: 50px;
	animation-name: header;
	animation-duration: 1s;
}
header img{
	width: 30px;
	height: 30px;
	position: relative;
	right: 5px;
	top: 5px;
}
header a{
	color: white;
	text-decoration: none;
	font-family: cursive;
	position: relative;
	left: 1100px;
	bottom: 20px;
	padding: 10px;
}
header a:hover{
	color: #b3b3b3;
}

section{
	width: 600px;
	height: 650px;
	position: relative;
	left: 700px;
	top: 20px;
	text-align: center;
}
.menu{
	position: relative;
	left: 170px;
	box-sizing: border-box;
	background-color: #353a82;
	width: 500px;
	height: 400px;
	padding: 10px;	
	animation-name: menu;
	animation-duration: 2s;
}
.menu span{
	font-size: 22px;
	color: white;
	font-family: Andale mono,monospace;
	position: relative;
	right: 155px;
	bottom: 10px;
}
.menu img{
	position: relative;
	right: 170px;
	width: 30px;
	height: 30px;
}
.menu div{
	padding: 20px;
	margin-bottom: 15px;
}
.menu div a{
	font-family: Andale mono, monospace;
	text-decoration: none;
	color: white;
	border-radius: 5px;
}
.menu div a:hover {
	box-shadow: 2px 3px 5px black;
}
@keyframes header{
	from{
		margin-top: -100px;
	}
	to{
		margin-top: 0px;
	}
}

@keyframes menu{
	from{
		margin-left: 900px;

	}
	to{
		margin-left: 0;
	}
}


</style>


</head>
<body>
	<header>
		<h2 style="color: white; font-size: 30px; letter-spacing: 5px; font-family:Andale Mono, monospace;">Sistema IES</h2>
		<a href="login.php"><img src="imagens/avatar.png">Area do professor</a>
	</header>
	<section>
		<div class="menu">
		<img src="imagens/menu.png"><span>Menu</span>
		<div>
		<a style="padding: 20px 126px;background: #c9661a;" href="formCadastro.php">Cadastre seu horário!</a>
		</div>
		<div>
		<a style="background: #c2a71f;padding: 20px 46px;" href="listar_horarios.php">Listar horarios de todos os professores</a>
		</div>
		<div>
		<a style="background:#4ba8bf;padding:20px ;" href="listar_disciplina_especifica.php">
		Listar horarios de uma determinada disciplina</a>
		</div>
		<div>
		<a style="padding: 20px 108px;background: #225599;" href="Mostrar_RGM_integrantes.php">Integrantes deste sistema</a>
		</div>
		</div>
	</section>
</body>
</html>