<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexão com o banco de dados
    include('C:/xampp/htdocs/projeto1810/base/config.php'); // Verifique se esse caminho está correto

    $id = $_POST['id'];
    $nova_senha = $_POST['nova_senha'];
    $confirma_senha = $_POST['confirma_senha'];

    // Verifica se as senhas são iguais
    if ($nova_senha != $confirma_senha) {
        echo "As senhas não coincidem.";
        exit;
    }

    // Hash da nova senha (usando BCRYPT para segurança)
    $senha_hash = password_hash($nova_senha, PASSWORD_BCRYPT);

    // Atualiza a senha no banco de dados
    $sql = "UPDATE usuario SET senha = ?, token_redefinicao = NULL WHERE id = ?";
    $stmt = $con->prepare($sql);
    
    // Executa a consulta
    if ($stmt->execute([$senha_hash, $id])) {
        echo "Senha redefinida com sucesso!";
        header("Location: /projeto1810/login.php"); // Corrigido
        exit;
    } else {
        echo "Erro ao redefinir a senha. Tente novamente.";
    }
}
?>
