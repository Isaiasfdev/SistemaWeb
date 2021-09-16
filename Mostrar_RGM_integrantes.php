<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Integrantes</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-color: #dfe4e6;
		}
		header{
			margin: 0 auto;
			box-sizing: border-box;
			text-align: left;
			width: 100%;
			height: 100px;
			background-color: #353a82;
			padding: 20px;
			margin-bottom: 50px;
		}
		header a{
			color: #353a82;
			text-decoration: none;
			font-family: Andale mono, monospace;
			position: relative;
			left: 1180px;
			bottom: 20px;
		}
		header a:hover{
			transition: 1s;
			color: white;
		}
		header a img{
			position: relative;
			right: 5px;
			top: 10px;
			width: 35px;
			height: 35px;
		}
		.integrantes{
			width: 100%;
			height: 100%;
			text-align: center;
		}
		.card{
			box-sizing: border-box;
			margin-right: 30px;
			display: inline-block;
			background-color: #091b57;
			width: 300px;
			height: 200px;
			color: white;
			border-radius: 7px;
			text-align: left;
			padding-left: 10px;
			padding-top: 30px;
			transition: all 0.5s;
		}
		.card:hover{
			-webkit-transform: scale(1.0);
    		transform: scale(1.2);
		}
		.card h4{
			position: relative;
			left: 20px;
			bottom: 10px;
			letter-spacing: 2px;
			font-family: Andale mono,monospace;
			font-size: 18px;
		}
		.card p{
			font-family: Andale mono, monospace;
			position: relative;
			left: 10px;
			top: 15px;
			margin-bottom: 15px;
		}
		.card h4 img{
			width: 25px;
			height: 25px;
		}
		
	</style>
</head>
<body>
	<header>
		<h2 style="color: white; font-size: 30px; letter-spacing: 5px; font-family:Andale Mono, monospace;">Integrantes deste sistema</h2>
		<a href="index.php"><img src="imagens/anterior.png">Voltar</a>
	</header>
	<section class="integrantes">
		<div class="card">
			<h4>Cruzeiro Do Sul <img src="imagens/star.png"></h4>
			<p>São Miguel</p>
			<p>Isaias Ferreira</p>
			<p>19069693</p>
		</div>
		<div class="card">
			<h4>Cruzeiro Do Sul <img src="imagens/star.png"></h4>
			<p>São Miguel</p>
			<p>Lucas Gomes</p>
			<p>19198990</p>
		</div>
	</section>

</body>
</html>