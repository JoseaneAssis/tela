<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Produtos</title>
	
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
	<input name="bt_cad" id="bt_cad" class="btn btn-success" type="submit" value="CRIAR">
    <input name="bt_editar id="bt_editar"class="btn btn-warning" type="reset" value="EDITAR">
    <input name="bt_excluir" id="bt_excluirr" class="btn btn-danger" type="button" value="EXCLUIR">
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


