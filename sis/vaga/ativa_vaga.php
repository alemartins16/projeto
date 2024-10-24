<?php
$id = (int) $_GET['id'];

$sql = "update vaga set ";
$sql .= "ativo='1' ";
$sql .= "where id = '".$id."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \projeto/dash.php?page=lista_vaga&msg=5');
    mysqli_close($con);
}else{
	header('Location: \projeto/dash.php?page=lista_vaga&msg=6');
    mysqli_close($con);
}
?>
