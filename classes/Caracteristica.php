<?php


class Caracteristica {
    private $nome;
    private $valor;
    public function __construct() {
    $this->nome  = $nome;
    $this->valor = $valor;
    }
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }
}