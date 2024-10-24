<?php
    $id_emp		     = $_POST["id_emp"];
    $cnpj_emp		 = $_POST["cnpj_emp"];
    $nome_emp        = $_POST["nome_emp"];
    $telefone_emp    = $_POST["telefone_emp"];
    $email_emp       = $_POST["email_emp"];
    $nome_resp_emp   = $_POST["nome_resp_emp"];
    $tel_resp_emp    = $_POST["tel_resp_emp"];

    $id_end                = $_POST["id_end"];
    $lograd_end            = $_POST['lograd_end'];
    $num_end               = $_POST['num_end'];
    $compl_end             = $_POST['compl_end'];
    $bairro_end            = $_POST['bairro_end'];
    $cidade_end            = $_POST['cidade_end'];
    $cep_end               = $_POST['cep_end'];


    $sql_empresa = "update empresa set ";
    $sql_empresa .= "cnpj_emp= '".$cnpj_emp."', nome_emp='".$nome_emp."', email_emp='".$email_emp."',";
    $sql_empresa .= "telefone_emp= '".$telefone_emp."', nome_resp_emp='".$nome_resp_emp."', tel_resp_emp='".  $tel_resp_emp."'";
    $sql_empresa .= "where id_emp = '".$id_emp."';";

    $sql_endereco = "update endereco set ";
    $sql_endereco .= "lograd_end='".$lograd_end."', num_end='".$num_end."', compl_end='".$compl_end."', bairro_end='".$bairro_end."', cidade_end='".$cidade_end."', cep_end='".$cep_end."'";
    $sql_endereco .= "where id_end = '".$id_end."';";


    $resultado = mysqli_query($con, $sql_empresa) or die(mysqli_error($con));

    // Verificando se a atualização do candidato foi bem-sucedida
    if ($resultado) {
        // Executando a query de atualização do endereço
        $resultado_endereco = mysqli_query($con, $sql_endereco) or die(mysqli_error($con));

        if ($resultado_endereco) {
            // Redireciona em caso de sucesso
            header('Location: \projeto/index.php?page=lista_emp&msg=2');
        } else {
            // Redireciona em caso de erro na atualização do endereço
            header('Location: \projeto/index.php?page=lista_emp&msg=4');
        }
    } else {
        // Redireciona em caso de erro na atualização do candidato
        header('Location: \projeto/index.php?page=lista_emp&msg=4');
    }
?>

    
  