<?php
	session_start();

	if (isset($_POST['codigo']) && empty($_POST['codigo']) == false) {

		$codigo = addslashes($_POST['codigo']);
		$senha = addslashes($_POST['senha']);

		$dns = "mysql:dbname=ies;localhost";
		$dbuser = "root";
		$dbpass = "";

		try {
			$db = new PDO($dns, $dbuser, $dbpass);

			$sql = $db->query("select * from horarios where CodProfessor = '$codigo' and senha = '$senha'");

			if ($sql->rowCount()>0) {
				
				$dado = $sql->fetch();

			}else{
				echo "<script>

				alert('Código ou senha invalidos')
				window.location.href='login.php';

				</script>";
			}

		} catch (PDOException $e) {
			echo "Falhou: " .$e->getMessage();
			
		}
	}else{
		echo "<script>

				alert('Efetue o login')
				window.location.href='login.php';

				</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Area do professor</title>
	<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background-color: #dfe4e6;
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
		header h2{
			color: white;
			font-family: Andale mono, monospace ;
			font-size: 30;
			letter-spacing: 5px;
		}
		header a{
			color: #353a82;
			text-decoration: none;
			font-family: Andale mono, monospace;
			position: relative;
			left: 1203px;
			bottom: 10px;
		}
		header a:hover{
			transition: 1s;
			color: white;
		}
		header a img{
			position: relative;
			right: 5px;
			top: 7px;
			width: 30px;
			height: 30px;
		}
		section{
			width: 100%;
			height: 100%;
		}
		section h1{
			color: #232638;
			display: inline;
			position: relative;
			left: 30%;
			font-family: Andale mono,monospace 	;

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
	<h2>Área do professor</h2>
	<a href="index.php"><img src="imagens/log-out.png">Sair</a>
	</header>
	<section>
		<?php print_r('<h1>Olá </h1> '.'<h1>'.$dado[1].'</h1>'. '<h1>, aqui estão suas aulas!</h1>');?>
	<div class="matutino">
	<span>Matutino</span>
	<table>
		<thead>
			<tr>
			<th>Segunda-feira</th>
			<th>Terça-feira</th>
			<th>Quarta-feira</th>
			<th>Quinta-feira</th>
			<th>Sexta-feira</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td> <?= $dado[2] ?> </td>
				<td> <?= $dado[4] ?> </td>
				<td> <?= $dado[6] ?> </td>
				<td> <?= $dado[8] ?> </td>
				<td> <?= $dado[10] ?> </td>
			</tr>
		</tbody>
	</table>
	</div>
	<br><br>
	<div class="noturno">
	<span>Noturno</span>
	<table>
		<thead>
			<tr>
			<th>Segunda-feira</th>
			<th>Terça-feira</th>
			<th>Quarta-feira</th>
			<th>Quinta-feira</th>
			<th>Sexta-feira</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td> <?= $dado[3] ?> </td>
				<td> <?= $dado[5] ?> </td>
				<td> <?= $dado[7] ?> </td>
				<td> <?= $dado[9] ?> </td>
				<td> <?= $dado[11] ?> </td>
			</tr>
		</tbody>
	</table>
	</div>
	</section>
</body>
</html>