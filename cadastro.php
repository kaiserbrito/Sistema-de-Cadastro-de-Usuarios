<?php 
require_once "config.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Cadastro de Usuários</title>
</head>
<body>
<div id="cadastro">
	<form method="POST" action="?go=cadastrar">
		<table>
			<tr>
				<td>Nome:</td>
				<td><input type="text", name="nome", id="nome" /></td>
			</tr>
			<tr>
				<td>Sobrenome:</td>
				<td><input type="text", name="sobrenome", id="sobrenome" /></td>
			</tr>
			<tr>
				<td>Estado:</td>
				<td><input type="text", name="estado", id="estado" /></td>
			</tr>
			<tr>
				<td>Cidade:</td>
				<td><input type="text", name="cidade", id="cidade" /></td>
			</tr>
			<tr>
				<td>País:</td>
				<td><input type="text", name="pais", id="pais" /></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text", name="email", id="email" /></td>
			</tr>
			<tr>
				<td>Senha:</td>
				<td><input type="password", name="senha", id="senha" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Cadastrar">
				<a href="./"><input type="button" value="Cancelar"></a>
				</td>
			</tr>
		</table>
	</form>
</div>


</body>
</html>

 <?php 
 if ($_GET['go'] == 'cadastrar') {
 	$nome = $_POST['nome'];
 	$sobrenome = $_POST['sobrenome'];
 	$estado = $_POST['estado'];
 	$cidade = $_POST['cidade'];
 	$pais = $_POST['pais'];
 	$email = $_POST['email'];
 	$senha = $_POST['senha'];

 	if (empty($nome)) {
 		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
 	}elseif ($sobrenome) {
 		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
 	}elseif ($estado) {
 		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
 	}elseif ($cidade) {
 		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
 	}elseif ($pais) {
 		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
 	}elseif ($email) {
 		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
 	}elseif ($senha) {
 		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
 	}else {
 		$query1 = mysqli_num_rows(mysql_query("SELECT * FROM usuarios WHERE email = '$email'");
 		if ($query1 == 1) {
 			echo "<script>alert('Usuário já existe.'); history.back();</script>";
 		}else {
 			mysqli_query("INSERT INTO usuarios (nome, sobrenome, estado, cidade, pais, email, senha) VALUES ('$nome', '$sobrenome', '$estado', '$cidade', '$pais', '$email', '$senha')");
 			echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
 			echo "<meta http-equiv='refresh' content='0, url=./'>";
 		}
 	}
 }

?>