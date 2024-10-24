<?php
    $id_cand		    = $_POST["id_cand"];
    $nome_cand          = $_POST["nome_cand"];
    $data_cad_cand      = $_POST["data_cad_cand"];
    $data_nasc_cand     = $_POST["data_nasc_cand"];
    $sexo_cand          = $_POST["sexo_cand"];
    $status_cand        = $_POST["status_cand"];
    $telefone_cand      = $_POST["telefone_cand"];
    $celular_cand       = $_POST["celular_cand"];
    $email_cand         = $_POST["email_cand"];
    
    $fdg_data_cad_cand = date('Y-m-d',strtotime($data_cad_cand)); 
    $fdg_data_nasc_cand = date('Y-m-d',strtotime($data_nasc_cand)); 

    $id_end                = $_POST["id_end"];
    $cep                   = $_POST['cep'];
    $logradouro            = $_POST['logradouro'];
    $numero                = $_POST['numero'];
    $complemento           = $_POST['complemento'];
    $bairro                = $_POST['bairro'];
    $cidade                = $_POST['cidade'];
    $uf_end                = $_POST['uf'];


    $sql_candidato = "update candidato set ";
    $sql_candidato .= "nome_cand='".$nome_cand."', email_cand='".$email_cand."',";
    $sql_candidato .= "data_cad_cand='".$fdg_data_cad_cand."', data_nasc_cand='".$fdg_data_nasc_cand."', sexo_cand='".$sexo_cand."', status_cand='".$status_cand."', telefone_cand= '".$telefone_cand."', celular_cand='".$celular_cand."'";
    $sql_candidato .= "where id_cand = '".$id_cand."';";

    $sql_endereco = "update endereco set ";
    $sql_endereco .= "cep='".$cep."', logradouro='".$logradouro."', numero='".$numero."', complemento='".$complemento."', bairro='".$bairro."', cidade='".$cidade."', uf='".$uf."'";
    $sql_endereco .= "where id_end = '".$id_end."';";


    $resultado = mysqli_query($con, $sql_candidato) or die(mysqli_error($con));

    // Verificando se a atualização do candidato foi bem-sucedida
    if ($resultado) {
        // Executando a query de atualização do endereço
        $resultado_endereco = mysqli_query($con, $sql_endereco) or die(mysqli_error($con));

        if ($resultado_endereco) {
            // Redireciona em caso de sucesso
            header('Location: \projeto/dash.php?page=lista_cand&msg=2');
        } else {
            // Redireciona em caso de erro na atualização do endereço
            header('Location: \projeto/dash.php?page=lista_cand&msg=4');
        }
    } else {
        // Redireciona em caso de erro na atualização do candidato
        header('Location: \projeto/dash.php?page=lista_cand&msg=4');
    }
?>

    
  