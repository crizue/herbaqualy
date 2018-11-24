<?php
class Artigo
{
    private $texto;
    private $titulo;
    private $subtitulo;
    private $id;
    private $id_user;
    private $data_hora;

    public function __construct($data_hora, $texto, $titulo, $subtitulo, $id, $iduser)
    {
        $this->data_hora = $data_hora;
        $this->texto = $texto;
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->id = $id;
        $this->id_user = $id_user;
    }
    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }
    /**
     * @param mixed $texto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }
    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }
    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    /**
     * @return mixed
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }
    /**
     * @param mixed $subtitulo
     */
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }
    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }
    /**
     * @return mixed
     */
    public function getDataHora()
    {
        return $this->data_hora;
    }
    /**
     * @param mixed $data_hora
     */
    public function setDataHora($data_hora)
    {
        $this->data_hora = $data_hora;
    }
}