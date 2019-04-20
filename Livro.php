<?php

class Livro {
    private $id;
    private $nome;
    private $editora;
    private $edicao;
    private $dataPu;
    
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }

    function getEditora() {
        return $this->editora;
    }

    function getEdicao() {
        return $this->edicao;
    }


    function getDataPu() {
        return $this->dataPu;
    }
    
    function setId($id) {
        $this->id = $id;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }


    function setEdicao($edicao) {
        $this->edicao = $edicao;
    }


    function setDataPu($dataPu) {
        $this->dataPu = $dataPu;
    }



}
