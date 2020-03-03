<?php


class Cesta
{
    private $time;
    private $itens;

    public function __construct()
    {
        $this->time = date('Y-m-d H:i:s');
        $this->itens = array();
    }

    public function addItem(Produto $p) // type hinting
    {
        $this->itens[] = $p;
    }

    /**
     * @return array
     */
    public function getItens(): array
    {
        return $this->itens;
    }

    /**
     * @return false|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param array $itens
     */
    public function setItens(array $itens): void
    {
        $this->itens = $itens;
    }

    /**
     * @param false|string $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }
}