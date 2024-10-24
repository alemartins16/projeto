<?php

    
    $cnpj_emp		 = $_POST["cnpj_emp"];
    $nome_emp        = $_POST["nome_emp"];
    $telefone_emp    = $_POST["telefone_emp"];
    $email_emp       = $_POST["email_emp"];
    $nome_resp_emp   = $_POST["nome_resp_emp"];
    $tel_resp_emp    = $_POST["tel_resp_emp"];

    
    
    $lograd_end            = $_POST['lograd_end'];
    $num_end               = $_POST['num_end'];
    $compl_end             = $_POST['compl_end'];
    $bairro_end            = $_POST['bairro_end'];
    $cidade_end            = $_POST['cidade_end'];
    $cep_end               = $_POST['cep_end'];
   
    $sql_empresa = "insert into empresa (cnpj_emp, nome_emp, telefone_emp, email_emp, nome_resp_emp, tel_resp_emp) 
    VALUES ('$cnpj_emp', '$nome_emp','$telefone_emp','$email_emp', '$nome_resp_emp', '$tel_resp_emp')";
    
    if (mysqli_query($con, $sql_empresa)) {
        // Obter o ID do candidato inserido
        $id_emp = mysqli_insert_id($con);

        // Query de inserção do endereço
        $sql_endereco = "insert into endereco (lograd_end, num_end, compl_end, bairro_end, cidade_end, cep_end, id_emp) 
        VALUES ('$lograd_end', '$num_end', '$compl_end', '$bairro_end', '$cidade_end', '$cep_end', '$id_emp')";

        // Executa a query de inserção do endereço
        if (mysqli_query($con, $sql_endereco)) {
            header('Location: \projeto/index.php?page=lista_emp&msg=1');
        } else {
            header('Location: \projeto/index.php?page=lista_emp&msg=4');
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($con);
    } else {
        // Caso a inserção do candidato falhe
        header('Location: \projeto/index.php?page=lista_emp&msg=4');
        mysqli_close($con);
    }

   
?>