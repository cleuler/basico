<?php
class Produto {
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque   = $estoque;
        $this->preco     = $preco;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $fabricante
     */
    public function setFabricante(Fabricante $f): void
    {
        $this->fabricante = $f;
    }

    /**
     * @return mixed
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }
}