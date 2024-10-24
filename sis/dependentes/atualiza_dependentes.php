<?php
    // Recebendo os valores do formulário
    $id                   = $_POST["id"];
    $nome                 = $_POST["nome"];
    $certidao_nascimento   = $_POST["certidao_nascimento"];
    $carteira_vacinacao    = $_POST["carteira_vacinacao"];

    // Atualizando o registro na tabela 'dependentes'
    $sql = "UPDATE dependentes SET ";
    $sql .= "nome = '".$nome."', certidao_nascimento = '".$certidao_nascimento."', carteira_vacinacao = '".$carteira_vacinacao."' ";
    $sql .= "WHERE id = '".$id."';";

    // Executando a query
    $resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

    // Verificando se a atualização foi bem-sucedida
    if ($resultado) {
        header('Location: \projeto/dash.php?page=lista_dependentes&msg=2');
        mysqli_close($con);
    } else {
        header('Location: \projeto/dash.php?page=lista_dependentes&msg=4');
        mysqli_close($con);
    }
?>

