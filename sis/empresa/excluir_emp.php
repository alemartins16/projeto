<?php
$id = (int) $_GET['id_emp'];
 
$sql_endereco = "delete from endereco where id_emp = $id;";
$resultado_endereco = mysqli_query($con, $sql_endereco);

$sql = "delete from empresa where id_emp = '$id';"; 
$resultado = mysqli_query($con, $sql)or die(mysqli_error());



if ($resultado) {
    header('Location: \projeto/index.php?page=lista_emp&msg=3');
    mysqli_close($con);
}else{
    header('Location: \projeto/index.php?page=lista_emp&msg=4');
    mysqli_close($con);
}
?>

