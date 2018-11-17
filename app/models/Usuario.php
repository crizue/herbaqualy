<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/04/18
 * Time: 13:16
 */

class Usuario
{
    public $id_user;
    private $nome;
    private $email;
    private $login;
    private $senha;
    private $tipo;


    public function __construct($nome, $email, $login, $senha, $tipo, $id_user='')
    {
        $this->id_user = $id_user;
        $this->nome = $nome;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
        $this->tipo = $tipo;

    }

    /**
     * @return null
     */
    public function getid_user()
    {
        return $this->id_user;
    }

    /**
     * @param null $id_user
     */
    public function setid_user($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLoginUso()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLoginUso($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenhaUso()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenhaUso($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }


}