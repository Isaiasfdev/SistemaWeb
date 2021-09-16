	<?php
	require_once('conexao.php');

	$codigocad = $_POST['codigo'];
	$nomecad = $_POST['nome'];
	$senha = $_POST['senha'];
	$segm = $_POST['segm'];
	$segn = $_POST['segn'];
	$tercam = $_POST['tercam'];
	$tercan = $_POST['tercan'];
	$quartam = $_POST['quartam'];
	$quartan = $_POST['quartan'];
	$quintam = $_POST['quintam'];
	$quintan = $_POST['quintan'];
	$sextam = $_POST['sextam'];
	$sextan = $_POST['sextan'];

	$sql_cadastro = mysqli_query($conexao, " INSERT INTO horarios(CodProfessor,nomeProf,senha,segm,segn,tercam,tercan,quartam,quartan,quintam,quintan,sextam,sextan) values('$codigocad',
		'$nomecad',
		'$senha',
		'$segm',
		'$segn',
		'$tercam',
		'$tercan',
		'$quartam',
		'$quartan',
		'$quintam',
		'$quintan',
		'$sextam',
		'$sextan')");

	if ($sql_cadastro==true) {
		echo "<script>

		alert('Professor(a) cadastrado(a) com sucesso!')
		window.location.href='index.php';
		</script>";
	}
	else
	 {
		echo "<script>

		alert('Falha no cadastro, insira um codigo valido')
		window.location.href='formCadastro.php';

		</script>";
	}
?>