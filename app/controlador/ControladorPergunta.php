<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/05/18
 * Time: 15:45
 */

require_once "../models/CrudUsuario.php";
require_once "../models/CrudPerguntas.php";


if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao) {
    case 'index':

        include "../viewa/perg.php";

        break;

    case 'cadastrar':

        include "../viewa/criaperg.php";

        break;
}