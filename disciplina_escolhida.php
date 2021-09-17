<?php
try {
	$pdo = new PDO("mysql:dbname=ies;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
}
if(isset($_GET['disciplina']) && $_GET['disciplina'] != '') {
	$disci = trim($_GET['disciplina'])."%";
	$sql = "SELECT * FROM horarios WHERE segm like :segm or segn like :segn or tercam like :tercam or tercan like :tercan or quartam like :quartam and quartan like :quartan or quintam like :quintam or quintan like :quintan or sextam like :sextam or sextan like :sextan";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":segm", $disci);
	$sql->bindValue(":segn", $disci);
	$sql->bindValue(":tercam", $disci);
	$sql->bindValue(":tercan", $disci);
	$sql->bindValue(":quartam", $disci);
	$sql->bindValue(":quartan", $disci);
	$sql->bindValue(":quintam", $disci);
	$sql->bindValue(":quintan", $disci);
	$sql->bindValue(":sextam", $disci);
	$sql->bindValue(":sextan", $disci);
	$sql->execute();
}
?>
<style>
body{
	margin: 0;
	padding: 0;
	background-color: #353a82;
}
	.resultado{
		height: 1000%;
		width: 100%;
		background-color: #353a82;
		padding-top: 5px;
		padding-bottom: 5px;
	}
	a{
		color: transparent;
		text-decoration: none;
		font-family: Andale mono, monospace;
		position: relative;
		left: 1210px;
		top: 20px;
		}
		a:hover{
			transition: 1s;
			color: white;
		}
		a img{
			position: relative;
			left: 2px;
			top: 10px;
			width: 30px;
			height: 30px;
		}
	.resultado h2{
		font-family: Andale mono, monospace;
		color: white;
		letter-spacing: 1px;
		margin-left: 10px;
	}
	.resultado .p1{
		background-color: orange;
		color: white;
		font-family: Andale mono, monospace;
		width: 300px;
		padding: 5px;
	}
	.resultado p{
		margin-left: 10px;
		background-color: #5fa170;
		width: 300px;
		color: white;
		padding: 5px;
	}
	.divisor{
		display: inline-block;
		margin-left: 10px;
		margin-top: 50px;
	}
</style>
<body>
<a href="listar_disciplina_especifica.php"><img src="imagens/anterior.png">Voltar</a>
<div class="resultado">
	
	<?php
	
	if($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $disci):
			?>
			<div class="divisor">
				<p class="p1"><?php echo 'Professor: ' .$disci['nomeProf']; ?></p>
				<h2>Matutino</h2>
				<p><?php echo 'Segunda-feira: ' .$disci['segm']; ?></p>
				<p><?php echo 'Terça-feira: ' .$disci['tercam']; ?></p>
				<p><?php echo 'Quarta-feira: '.$disci['quartam']; ?></p>
				<p><?php echo 'Quinta-feira: '.$disci['quintam']; ?></p>
				<p><?php echo 'Sexta-feira: '.$disci['sextam']; ?></p>
				<h2>Noturno</h2>
				<p><?php echo 'Segunda-feira: '.$disci['segn']; ?></p>
				<p><?php echo 'Terça-feira: '.$disci['tercan']; ?></p>
				<p><?php echo 'Quarta-feira: '.$disci['quartan']; ?></p>
				<p><?php echo 'Quinta-feira: '.$disci['quintan']; ?></p>
				<p><?php echo 'Sexta-feira: '.$disci['sextan']; ?></p>
				</div>
			<?php
	endforeach;
	}else{
		echo "<script>

				alert('Disciplina inexistente, tente novamente!')
				window.location.href='listar_disciplina_especifica.php';

				</script>";
	}
	?>
</div>
</body>