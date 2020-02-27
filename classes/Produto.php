<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;


    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) AND $unidades >= 0) {
            $this->estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) AND $unidades >= 0) {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual)
    {
        if (is_numeric($percentual) AND $percentual >= 0) {
            $this->preco *= (1 + ($percentual / 100));
        }
    }

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        print "CONSTRUÍDO: Objeto {$this->descricao}, estoque {$this->estoque}, preço {$this->preco}<br>\n";
    }

    public function __destruct()
    {
        // Implement __destruct() method.
        print "DESTRUÍDO: Objeto {$this->descricao}, estoque {$this->estoque}, preço {$this->preco}<br>\n";
    }

    public function addCaracteristica($nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * @param mixed $estoque
     */
    public function setEstoque($estoque): void
    {
        $this->estoque = $estoque;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * @param mixed $fabricante
     */
    public function setFabricante($fabricante): void
    {
        $this->fabricante = $fabricante;
    }

    /**
     * @return mixed
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * @param mixed $caracteristicas
     */
    public function setCaracteristicas($caracteristicas): void
    {
        $this->caracteristicas = $caracteristicas;
    }
}