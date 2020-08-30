<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Projeto Login</title>
	<link rel="stylesheet" href="CSS/estilo.css">

</head>
<body>
<div id="corpo-form-AreaP">
	<h1>Produtos</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="Nome" maxlength="30">
		<input type="email" name="descricao" placeholder="Descrição" maxlength="40">
		<input type="password" name="categoria" placeholder="Categoria" maxlength="15">
		<input type="password" name="preco" placeholder="Preço" maxlength="15">
		<input type="password" name="estoque" placeholder="Estoque" maxlength="15">
		
	</form>
</div>
<?php


	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: index.php");
		exit;
	}
?>



<a href="sair.php"><strong>Logout</strong></a>