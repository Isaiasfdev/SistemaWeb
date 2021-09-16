<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<style>
body{
	background-color: #cbcbd1;
}
.login{
	margin: 0 auto;
	box-sizing: border-box;
	text-align: center;
	margin-top: 150px;
	width: 250px;
	height: 300px;
	background-color: #353a82;
	padding-top: 10px;
}
.login h1{
	color: white;
	font-family: Andale mono, monospace;
}
.login input:nth-of-type(1),.login input:nth-of-type(2) {
	border-left: none;
	border-bottom: 1px solid white;
	border-top: none;
	border-right: none;
	background-color: #353a82;
	border-radius: 5px;
	padding: 9px;
	outline: 0;
	color: white;
}
.login input::placeholder{
	color: #b0b5b1;
}
.login input:hover::placeholder{
	transform: translateY(-10px);
	transition: 0.4s;
}
.login input[type=submit]{
	color: #0000FF;
	padding: 5px 15px;
	border: 1px solid #8184db;
	border-radius: 7px;
	letter-spacing: 1px;
}
.login input[type=submit]:hover{
	color: white;
	background-color: #8184db;
	cursor: pointer;
}
.login a{
	font-family: Andale mono,monospace;
	color: #353a82;
	padding: 10px;
	position: relative;
	bottom: 25px;
	left: 6px;
	letter-spacing: 1px;
	text-decoration: none;
}
.login a img{
	position: relative;
	top: 5px;
	right: 9px;
	width: 30px;
	height: 30px;
}
.login a:hover{
	transition: 1s;
	color: white;
}

</style>
<body>
<div class="login">
<h1>Login</h1>
<form method="post" action="areadoprofessor.php">

	<input type="text" name="codigo" placeholder="Código" required><br><br>

	<input type="password" name="senha" placeholder="Senha" required><br><br>

	<input type="submit" name="Entrar" value="Entrar"><br><br><br>

	<a href="index.php"><img src="casa.png"><br>Home</a>

</form>
</div>
</body>
</html>
