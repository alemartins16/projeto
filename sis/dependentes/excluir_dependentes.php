<?php
// Recebendo o ID do registro a ser excluído via GET
$id = (int) $_GET['id'];

// Definindo a query para excluir o registro da tabela 'dependentes'
$sql = "DELETE FROM dependentes WHERE id = '$id';";

// Executando a query
$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

// Verificando se a exclusão foi bem-sucedida
if ($resultado) {
    // Redireciona para a lista de dependentes com a mensagem de sucesso (msg = 3)
    header('Location: \projeto/dash.php?page=lista_dependentes&msg=3');
    mysqli_close($con);
} else {
    // Redireciona para a lista de dependentes com a mensagem de erro (msg = 4)
    header('Location: \projeto/dash.php?page=lista_dependentes&msg=4');
    mysqli_close($con);
}
?>

