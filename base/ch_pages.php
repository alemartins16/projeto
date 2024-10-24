<?php
if (isset($_GET['page'])) {

    switch ($_GET['page']) {
        case 'home':
            include 'base/cards.php';
            break;
        // ---- CANDIDATOS ----///
        case 'lista_cand':
            include "sis/candidato/lista_cand.php";
            break;

        case 'foradd':
            include "sis/candidato/foradd.php";
            break;

        case 'inserir_cand':
            include "sis/candidato/inserir_cand.php";
            break;

        case 'fedit_cand':
            include "sis/candidato/fedit_cand.php";
            break;

        case 'view_cand':
            include "sis/candidato/view_cand.php";
            break;

        case 'excluir_cand':
            include "sis/candidato/excluir_cand.php";
            break;

        case 'atualiza_cand':
            include "sis/candidato/atualiza_cand.php";
            break;
        // ---- FICHA ----///
        case 'lista_ficha':
            include "sis/ficha/lista_ficha.php";
            break;

        case 'foradd':
            include "sis/ficha/foradd.php";
            break;

        case 'inserir_ficha':
            include "sis/ficha/inserir_ficha.php";
            break;

        case 'fedit_ficha':
            include "sis/ficha/fedit_ficha.php";
            break;

        case 'view_ficha':
            include "sis/ficha/view_ficha.php";
            break;

        case 'excluir_ficha':
            include "sis/ficha/excluir_ficha.php";
            break;    

        case 'atualiza_ficha':
            include "sis/ficha/atualiza_ficha.php";
            break;   
            
        // ---- EMPRESA ----///        

        case 'lista_emp':
            include "sis/empresa/lista_emp.php";
            break;
    

     // ---- USUÁRIO ----///
        case 'lista_usu':
            include "sis/usuario/lista_usu.php";
        break;

        case 'foradd_usu':
            include "sis/usuario/foradd_usu.php";
        break;

        case 'insere_usu':
            include "sis/usuario/insere_usu.php";
        break;

        case 'fedit_usu':
            include "sis/usuario/fedit_usu.php";
        break;

        case 'view_usu':
            include "sis/usuario/view_usu.php";
        break;

        case 'excluir_usu':
            include "sis/usuario/excluir_usu.php";
        break;    

        case 'atualiza_usu':
            include "sis/usuario/atualiza_usu.php";
        break;

        case 'ativa_usu':
            include "sis/usuario/ativa_usu.php";
        break;

        case 'block_usu':
            include "sis/usuario/block_usu.php";
        break;

        // ---- VAGA ----///
        case 'lista_vaga':
            include "sis/vaga/lista_vaga.php";
            break;

        case 'fadd_vaga':
            include "sis/vaga/fadd_vaga.php";
            break;

        case 'insere_vaga':
            include "sis/vaga/insere_vaga.php";
            break;

        case 'fedita_vaga':
            include "sis/vaga/fedita_vaga.php";
            break;

        case 'view_vaga':
            include "sis/vaga/view_vaga.php";
            break;

        case 'excluir_vaga':
            include "sis/vaga/excluir_vaga.php";
            break;    

        case 'atualiza_vaga':
            include "sis/vaga/atualiza_vaga.php";
            break;   

        default:
            include "base/cards.php";
        break;       
    }
}
