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


}