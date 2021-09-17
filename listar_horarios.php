<?php
	include_once('conexao.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de todas as aulas</title>
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background-color: #eef0e1;
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
		}
		h2{
			color: white;
			font-family: Andale mono,monospace;
			font-size: 30px;
		}
		header a{
			color: #353a82;
			text-decoration: none;
			font-family: cursive;
			position: relative;
			left: 90%;
			bottom: 30%;
		}
		header a img{
			width: 35px;
			height: 35px;
			position: relative;
			top: 5px;
			right: 3px;

		}
		header a:hover{
			transition: 1s;
			color: white;
		}
		section span{
			position: relative;
			left: 10px;
			color: #232638;
			font-size: 25px;
			font-weight: bold;
			font-family: Tahoma;
		}
		
		.matutino table{
			margin: 0 auto;
			width: 100%;
			text-align: left;
			padding: 10px;
		}
		.matutino table th{
			background-color: rgba(130, 131, 158, 0.8);;
			color: white;
			padding: 5px;
			border-radius: 2px;
			font-family: tahoma;
			font-size: 15px;
		}
		.matutino td{
			font-family: Tahoma;
			font-size: 15px;
			border-bottom: 1px solid black;
			border-right: 1px solid black;
			background-color: #7380d1;
			color: white;
			padding: 2px;
			animation-name: animacao;
			animation-duration: 4s;
			animation-iteration-count: infinite;
		}
		.noturno table{
			width: 100%;
			text-align: left;
			padding: 10px;
		}
		.noturno table th{
			background-color: rgba(130, 131, 158, 0.8);;
			color: white;
			padding: 5px;
			border-radius: 2px;
			font-family: tahoma;
			font-size: 15px;
		}
		.noturno td{
			font-family: ;
			font-size: 15px;
		}
		.noturno td{
			font-family: Tahoma;
			font-size: 15px;
			border-bottom: 1px solid black;
			border-right: 1px solid black;
			background-color: #7380d1;
			color: white;
			padding: 2px;
		}
	</style>
</head>
<body>
	<header>
	<h2>Lista de aulas</h2>
	<a href="index.php"><img src="imagens/anterior.png">Voltar</a>
	</header>
	<section>
	<div class="matutino">
	<span>Matutino</span>
	<table>
		<thead>
			<tr>
			<th>Nome</th>
			<th>Código</th>
			<th>Segunda-feira</th>
			<th>Terça-feira</th>
			<th>Quarta-feira</th>
			<th>Quinta-feira</th>
			<th>Sexta-feira</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql_consulta=mysqli_query($conexao, "SELECT * FROM `horarios` ORDER BY `horarios`.`nomeProf` ASC");
				while ($dados=mysqli_fetch_array($sql_consulta)) {
					?>
					<tr>
					<td> <?= $dados[1] ?> </td>
					<td> <?= $dados[0] ?> </td>
					<td> <?= $dados[2] ?> </td>
					<td> <?= $dados[4] ?> </td>
					<td> <?= $dados[6] ?> </td>
					<td> <?= $dados[8] ?> </td>
					<td> <?= $dados[10] ?> </td>
					</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<br><br>
	<div class="noturno">
	<span>Noturno</span>
	<table>
		<thead>
			<tr>
			<th>Nome</th>
			<th>Código</th>
			<th>Segunda-feira</th>
			<th>Terça-feira</th>
			<th>Quarta-feira</th>
			<th>Quinta-feira</th>
			<th>Sexta-feira</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql_consulta=mysqli_query($conexao,"SELECT * FROM `horarios` ORDER BY `horarios`.`nomeProf` ASC");
				while ($dados=mysqli_fetch_array($sql_consulta)) {
					?>
					<tr>
					<td> <?= $dados[1] ?> </td>
					<td> <?= $dados[0] ?> </td>
					<td> <?= $dados[3] ?> </td>
					<td> <?= $dados[5] ?> </td>
					<td> <?= $dados[7] ?> </td>
					<td> <?= $dados[9] ?> </td>
					<td> <?= $dados[11] ?> </td>
					</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	</section>
</body>
</html>