<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/05/18
 * Time: 15:45
 */

session_start();

require_once "../models/CrudUsuario.php";
require_once "../models/CrudPerguntas.php";
require_once "../models/CrudRespostas.php";
include "../viewa/head.php";

if (isset($_GET['acao'])){
$acao = $_GET['acao'];
}else{
    $acao = 'index';
}

$pgSmenu = ['login', 'cadastrar', 'esqueceuSenha', 'logout'];

$verifica = true;
foreach ($pgSmenu as $pg){
    if ($acao == $pg){
        $verifica = false;
    }
}

if ($verifica){
    include "../viewa/menu.php";
}

switch ($acao) {

    case 'index':

        if (isset($_GET['iduser'])){
            @session_start();
            $_SESSION['id'] = $_GET['iduser'];
        }
        include "../viewa/index.php";

        break;

    case 'perguntar':
        if (isset($_POST['gravar'])){
            $pergunta = new Pergunta(date("Y-m-d H:i:s"), $_POST['descricao'], $_POST['pergunta']);
            $pergunta->setDataHora(date("Y-m-d H:i:s"));
            $crud = new Crudpergunta();
            $crud->insertPergunta($pergunta, $_SESSION['id_user']);
            
            include "../viewa/index.php";
        }else {
            include "../viewa/criaperg.php";
        }

        break;

    case 'pergunta':

        include "../viewa/perg.php";
        break;

    case 'categoria':
        break;

    case 'plantas':
        include "../viewa/cha.php";
        break;

    case 'efetuar':
        break;


    case 'cadastrar';
        if (!isset($_POST['gravar'])) { // se ainda nao tiver preenchido o form
            if (isset($_GET['tipo'])){
                if ($_GET['tipo'] == 'comum'){
                    include '../viewa/register_comum.php';
                } elseif ($_GET['tipo'] == 'biologo'){
                    include '../viewa/register_biologo.php';
                }
            }

        } else {

            // depois de preencher o formulario


                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                $email = $_POST['email'];
                $login = $_POST['login'];

                $novoUsuario = new Usuario($nome, $email, $login, $senha, $_GET['tipo']);
                $crud = new CrudUsuarios();
                $iduser = $crud->insertUsuario($novoUsuario);

                header('Location: index.php?acao=login');

            };

        break;

    case 'login':
        if (!isset($_POST['gravar'])) { //primeiro clique - exibir formulario
            include '../viewa/login.php';
        } else {
            //depois de clicar em entrar
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $crud = new CrudUsuarios();
            $resultado = $crud->verificaLogin($login, $senha);
            if($resultado == 0){
                //SE DER ERRADO O LOGIN VOLTA COPM MSG DE ERRO
                header("Location: ?acao=login&erro=loginInvalido");
                die;
            }else{
                $usuario = $crud->getUsuarioLogin($login);
                $iduser = $usuario->id_user;
                $_SESSION['login'] = $usuario->getLoginUso();
                $_SESSION['id_user'] = $usuario->id_user;
                $_SESSION['id_tip_user'] = $usuario->getTipo();
                header("Location: index.php?iduser=$iduser");
            }

//

        }

        break;

    case 'logout':
        session_start();
        session_destroy();
        header('Location: index.php?acao=login');
        break;

    case 'deletarUsuario':
        $id_user = $_SESSION['id_user'];
        $crud1 = new CrudUsuarios();
        $delete = $crud1->deleteUsuario($id_user);

        session_destroy();
        header('location: ../login.php');
        break;

    case 'esqueceuSenha':

        include "../viewa/forgot-password.php";

        break;
}

if ($verifica){
    include "../viewa/footer.php";
}