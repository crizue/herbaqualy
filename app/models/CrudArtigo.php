<?php

require_once "Artigo.php";
require_once "CrudUsuario.php";
require_once "Conexao.php";

/**
 *
 */
class CrudArtigo
{

    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }


    public function insertArtigo($artigo, $id_user)
    {
        $data_hora = $artigo->getDataHora();
        $texto = $artigo->getTexto();
        $titulo= $artigo->getTitulo();
        $subtitulo = $artigo->getSubtitulo();
        $id_user = $artigo->getUser();

        $consulta = "INSERT INTO artigo (texto, titulo, subtitulo, id_user, data_hora) VALUES ('{$texto}', '{$titulo}', '{$subtitulo}', '{$id_user}',  '{$data_hora}')";
        //echo $consulta;
        try {
            $res = $this->conexao->exec($consulta);
            //return $res;
        } catch (PDOException $erro) {
            return $erro->getMessage();
        }

    }

    public function getArtigo($id_artigo)
    {

        $sql = "SELECT * FROM artigo as p, usuario as u WHERE p.id_user=u.id_user and p.id_artigo = $id_artigo";
        $resultado = $this->conexao->query($sql);
        $pergunta = $resultado->fetch(PDO::FETCH_ASSOC);

        $user = new CrudUsuarios();
        $artigo['user'] = $user->getUsuario($artigo['id_user']);


        return $artigo;
    }

    public function updateArtigo(artigo $artigo)
    {

        $consulta = "UPDATE artigo SET texte = '{$artigo->getTexto()}', titulo = '{$artigo->getTitulo()}' , subtitulo = '{$artigo->getSubtitulo()}', where id_arigo= {$artigo->getId()}";


        try {
            $res = $this->conexao->exec($consulta);
            //return $res;
        } catch (PDOException $erro) {
            return $erro->getMessage();
        }
    }

    public function deleteArtigo($id_artigo)
    {

        $consulta = "DELETE FROM artigo WHERE id_artigo = $id_artigo";
        try {
            $res = $this->conexao->exec($consulta);
            //return $res;
        } catch (PDOException $erro) {
            return $erro->getMessage();
        }
    }



    public function getArtigos()
    {
        $sql = "SELECT * FROM artigo";
        $resultado = $this->conexao->query($sql);
        $listapergunta = [];

        $listaArtigos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $user = new CrudUsuarios();
        foreach ($listaArtigos as $key => $lp){
            $listaArtigos[$key]['user'] = $user->getUsuario($lp['id_user']);
        }
        return $listaArtigos;
    }


}

?>