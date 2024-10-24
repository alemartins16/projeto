<?php

    $id_cand		    = $_POST["id_cand"];
    $nome_cand          = $_POST["nome_cand"];
    $data_cad_cand      = $_POST["data_cad_cand"];
    $data_nasc_cand     = $_POST["data_nasc_cand"];
    $sexo_cand          = $_POST["sexo_cand"];
    $rg_cand          	= $_POST["rg_cand"];
    $cpf_cand           = $_POST["cpf_cand"];
    $telefone_cand      = $_POST["telefone_cand"];
    $celular_cand       = $_POST["celular_cand"];
    $email_cand         = $_POST["email_cand"];
    $escolaridade_cand  = $_POST["escolaridade_cand"];

    $fdata_cad_cand 	= implode("-", array_reverse(explode("/", $data_cad_cand)));
    $fdata_nasc_cand 	= implode("-", array_reverse(explode("/", $data_nasc_cand)));

    $id_end                = $_POST["id_end"];
    $cep                   = $_POST['cep'];
    $logradouro            = $_POST['logradouro'];
    $numero                = $_POST['numero'];
    $complemento           = $_POST['complemento'];
    $bairro                = $_POST['bairro'];
    $cidade                = $_POST['cidade'];
    $uf                    = $_POST['uf'];
   
    $sql_candidato = "insert into candidato (nome_cand, data_cad_cand, data_nasc_cand, sexo_cand, telefone_cand, celular_cand, email_cand) 
    VALUES ('$nome_cand', '$fdata_cad_cand', '$fdata_nasc_cand', '$sexo_cand',  '$telefone_cand', '$celular_cand', '$email_cand')";
    
    if (mysqli_query($con, $sql_candidato)) {
        // Obter o ID do candidato inserido
        $id_cand = mysqli_insert_id($con);

        // Query de inserção do endereço
        $sql_endereco = "insert into endereco (cep, logradouro, numero, complemento, bairro, cidade, uf, id_cand) 
        VALUES ('$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf', '$id_cand')";

        // Executa a query de inserção do endereço
        if (mysqli_query($con, $sql_endereco)) {
            header('Location: \projeto/dash.php?page=lista_cand&msg=1');
        } else {
            header('Location: \projeto/dash.php?page=lista_cand&msg=4');
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($con);
    } else {
        // Caso a inserção do candidato falhe
        header('Location: \projeto/dash.php?page=lista_cand&msg=4');
        mysqli_close($con);
    }

   
?>