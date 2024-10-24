<?php
// Inclua a sua conexão com o banco de dados
    include('C:/xampp/htdocs/projeto1810/base/config.php'); // Ajuste o caminho de acordo com o seu arquivo de conexão

    if (isset($_GET['token'])) {
        $token = $_GET['token'];

    // Consultar o banco de dados para verificar o token e obter o ID do usuário
        $sql = "select id from usuario where token_redefinicao = ? and token_expiracao > now() limit 1";
        $stmt = $con->connect_error($sql);
        $stmt->execute([$token]);
        $resultado = $stmt->fetch(PDO::fetch_assoc);

        if ($resultado) {
             $id = $resultado['id']; // Obtenha o ID do usuário
        } else {
             echo "Token inválido ou expirado.";
        exit;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <script>
        function validarSenha() {
            var novaSenha = document.getElementById("nova_senha").value;
            var confirmaSenha = document.getElementById("confirma_senha").value;
            
            if (novaSenha !== confirmaSenha) {
                alert("As senhas não correspondem.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h2>Redefinir Senha</h2>
    <form action="processa_redefinicao.php" method="POST" onsubmit="return validarSenha();">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="nova_senha">Nova Senha:</label>
        <input type="password" name="nova_senha" id="nova_senha" required><br>

        <label for="confirma_senha">Confirme a Nova Senha:</label>
        <input type="password" name="confirma_senha" id="confirma_senha" required><br>

        <button type="submit">Redefinir Senha</button>
    </form>
</body>
</html>
