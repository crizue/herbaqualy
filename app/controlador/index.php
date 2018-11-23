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
require_once "../models/CrudComentarios.php";
include "../viewa/head.php";

if (isset($_GET['acao'])){
$acao = $_GET['acao'];
} elseif (!isset($_SESSION['login'])){
    $acao = 'login';
}else{
    $acao = 'index';
}

$pgSmenu = ['login', 'cadastrar', 'esqueceuSenha', 'logout', 'perguntar', 'resposta', 'comentar'];

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


        $perguntas = new Crudpergunta();
        $array = $perguntas->getPerguntas();

        include "../viewa/index.php";

        break;

    case 'perguntar':
        if (isset($_POST['gravar'])){

            $target_dir = "../../assets/img/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";

                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $image = $target_file; // the image to crop
                    $dest_image = $target_file; // make sure the directory is writeable

                    $org_img = imagecreatefromjpeg($image);

                    if (imagesy($org_img) <= imagesx($org_img)) {
                        $size = imagesy($org_img);
                    } else {
                        $size = imagesx($org_img);
                    }

                    $img = imagecreatetruecolor($size, $size);
                    $imsx = (imagesx($org_img) - $size) / 2;
                    $imsy = (imagesy($org_img) - $size) / 2;

                    imagecopy($img, $org_img, 0, 0, $imsx, $imsy, $size, $size);
                    imagejpeg($img, $dest_image, 90);
                    imagedestroy($img);

                    if (file_exists($target_dir . 'pergunta-' . $_SESSION['id_user'] . '-' . date("H-i-s") . '.' . $imageFileType)) {
                        unlink($target_dir . 'pergunta-' . $_SESSION['id_user'] . '-' . date("H-i-s") . '.' . $imageFileType);
                        rename($target_file, $target_dir . 'pergunta-' . $_SESSION['id_user'] . '-' . date("H-i-s") . '.' . $imageFileType);
                    } else {
                        rename($target_file, $target_dir . 'pergunta-' . $_SESSION['id_user'] . '-' . date("H-i-s") . '.' . $imageFileType);
                    }

                    $caminho_img = $target_dir . 'pergunta-' . $_SESSION['id_user'] . '-' . date("H-i-s") . '.' . $imageFileType;

                    echo $caminho_img;
                }
            }

            $pergunta = new Pergunta(date("Y-m-d H:i:s"), $_POST['descricao'], $_POST['pergunta'], $caminho_img);
            $pergunta->setDataHora(date("Y-m-d H:i:s"));
            $crud = new Crudpergunta();
            $crud->insertPergunta($pergunta, $_SESSION['id_user']);

            header('Location: index.php?acao=index');

        }else {
            include "../viewa/menu.php";
            include "../viewa/criaperg.php";
        }

        break;

    case 'resposta':
        if (isset($_POST['gravar'])){
            $crudresposta = new crudRespostas();
            $resposta = new Resposta(date("Y-m-d H:i:s"), $_POST['text'], $_SESSION['id_user'], $_GET['id']);
            $crudresposta->insertResposta($resposta);



            header('Location: index.php?acao=index');

        }else {
            include "../viewa/menu.php";

            $perguntas = new Crudpergunta();
            $array = $perguntas->perguntanAORespondidas();


            include "../viewa/index.php";
        }




        break;

    case 'comentar':
        if (isset($_POST['comentario'])) {
            $crudComentario = new crudComentarios();
            $comentario = new Comentario(date("Y-m-d H:i:s"), $_POST['texto'], $_SESSION['id_user'], $_GET['id']);

            $crudComentario->insertComentario($comentario);
        }

        header('Location: index.php?acao=pergunta&id=' . $_GET['id']);
        break;

    case 'pergunta':
        $perguntas = new Crudpergunta();
        $pergunta  = $perguntas->getPergunta($_GET['id']);


        if (($_SESSION['id_tip_user'] < 3) or $pergunta['status'] == 1){
            if ($pergunta['status'] == 1){
                $resposta = new crudRespostas();
                $comentario = new crudComentarios();

                $resposta = $resposta->getResposta($_GET['id']);

                $comentario = $comentario->getComentarios($_GET['id']);
            } else {
                $resposta['texto_res'] = 'sem resposta';
                $resposta['user'] = new Usuario('','', '', '', '');
            }
            include "../viewa/perg.php";
        }else {
            if (isset($_POST['gravar'])){
                $crudresposta = new crudRespostas();
                $resposta = new Resposta(date("Y-m-d H:i:s"), $_POST['text'], $_SESSION['id_user'], $_GET['id']);
                $crudresposta->insertResposta($resposta);



                header('Location: index.php?acao=index');

            }else {
                include "../viewa/resp.php";
            }
        }

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