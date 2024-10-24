<?php
	$nome 				= $_POST["nome"];
	$usuario			= $_POST["usuario"];
	$senha				= $_POST["senha"];
	$email				= $_POST["email"];
	$nivel				= $_POST["nivel"];


	$sql = "insert into usuario (nome, usuario, senha, email, nivel, situacao, dt_cadastro) values ";
	$sql .= "('$nome','$usuario', '".sha1($senha)."', '$email','$nivel','1', '".date('Y-m-d')."');";

	$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

	if ($resultado) {
		// Gerar token para criação de senha
		$token = bin2hex(random_bytes(50)); // Gera um token aleatório de 100 caracteres
		$expiracao_token = date("Y-m-d H:i:s", strtotime('+1 hour')); // O token expira em 1 hora
		
		// Pegar o ID do usuário recém-criado
		$user_id = mysqli_insert_id($con);
		
		// Atualizar a tabela de usuários com o token e a data de expiração
		$update_token_sql = "UPDATE usuario SET reset_token = '$token', token_expiracao = '$expiracao_token' WHERE id = '$user_id'";
		mysqli_query($con, $update_token_sql);
		
		// Montar o link para criação de senha
		$base_url = "https://grupotriunfo.github.io/criarsenha.html"; // Altere para a URL da sua página de criação de senha
		$link = $base_url . "?token=" . $token;
		
		// Assunto e corpo do e-mail
		$subject = "Criação de Senha";
		$message = "
		<html>
		<head>
		  <title>Criação de Senha</title>
		</head>
		<body>
		  <p>Olá, $nome</p>
		  <p>Sua conta foi criada com sucesso. Clique no link abaixo para criar sua senha:</p>
		  <p><a href='$link'>$link</a></p>
		  <p>Atenciosamente,</p>
		  <p>Grupo Triunfo</p>
		</body>
		</html>
		";
		
		// Cabeçalhos do e-mail
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: no-reply@seusite.com' . "\r\n";
		
		// Enviar o e-mail
		if (mail($email, $subject, $message, $headers)) {
			// E-mail enviado com sucesso
			header('Location: \projeto/dash.php?page=lista_usu&msg=1');
		} else {
			// Usuário criado, mas houve um problema ao enviar o e-mail
			header('Location: \projeto/dash.php?page=lista_usu&msg=5');
		}
		
		mysqli_close($con);
		} else {
		// Erro na criação do usuário
		header('Location: \projeto/dash.php?page=lista_usu&msg=6');
		mysqli_close($con);
	}	
?>