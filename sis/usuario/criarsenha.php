<?php
// Conexão com o banco de dados
require_once('C:/xampp/htdocs/projeto1810/base/config.php');

// Verifica se o token foi passado via URL
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    
    // Consulta o banco de dados para verificar se o token existe e se não expirou
    $query = "select id, token_expiracao from usuario where reset_token = '$token'";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $user_id = $user['id'];
        $token_expiracao = $user['token_expiracao'];
        
        // Verifica se o token ainda não expirou
        if (new DateTime() < new DateTime($token_expiracao)) {
            // O token é válido, exibe o formulário para criar a nova senha
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // O formulário foi enviado
                $nova_senha = $_POST['nova_senha'];
                $confirmar_senha = $_POST['confirmar_senha'];
                
                // Verifica se as senhas correspondem
                if ($nova_senha == $confirmar_senha) {
                    // Hash da nova senha
                    $senha_hash = sha1($nova_senha);
                    
                    // Atualiza a senha no banco de dados e remove o token
                    $update_query = "UPDATE usuario SET senha = '$senha_hash', reset_token = NULL, token_expiracao = NULL WHERE id = '$user_id'";
                    mysqli_query($con, $update_query);
                    
                    // Redireciona o usuário após o sucesso
                    echo "Senha criada com sucesso! Agora você pode <a href='redefinir.php'>Fazer login</a>.";
                } else {
                    echo "As senhas não correspondem. Tente novamente.";
                }
            } else {
                // Exibe o formulário para criar nova senha
                echo '
                <h2>Crie sua nova senha</h2>
                <form method="POST" action="">
                    <label for="nova_senha">Nova Senha:</label>
                    <input type="password" name="nova_senha" required>
                    
                    <label for="confirmar_senha">Confirme a Nova Senha:</label>
                    <input type="password" name="confirmar_senha" required>
                    
                    <button type="submit">Criar Senha</button>
                </form>
                ';
            }
        } else {
            echo "O token expirou. Solicite um novo link para criar sua senha.";
        }
    } else {
        echo "Token inválido. Verifique o link ou solicite um novo.";
    }
} else {
    echo "Token não fornecido.";
}
?>
