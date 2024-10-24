<?php

// Recebendo os dados do formulário
$id =                       $_POST["id"];
$nome =                     $_POST["nome"];
$certidao_nascimento =      $_POST["certidao_nascimento"];
$carteira_vacinacao =       $_POST["carteira_vacinacao"];

// Montando a consulta SQL com os campos corretos
$sql = "INSERT INTO dependentes (id, nome, certidao_nascimento, carteira_vacinacao) VALUES ";
$sql .= "('$id', '$nome', '$certidao_nascimento', '$carteira_vacinacao');";

// Executando a consulta SQL e verificando o resultado
$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if ($resultado) {
    // Se o insert for bem-sucedido, redireciona com mensagem de sucesso
    header('Location: \projeto/dash.php?page=lista_dependentes&msg=1');
    mysqli_close($con);
} else {
    // Se houver erro, redireciona com mensagem de erro
    header('Location: \projeto/dash.php?page=lista_dependentes&msg=4');
    mysqli_close($con);
}

?>
