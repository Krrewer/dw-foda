<?php

class Preferencia{
    public $nome;
    public $publicidade;
    public $idade;

    public function __construct($nome, $idade, $yn){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->publicidade = $yn;
    }

}