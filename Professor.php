<?php

class Professor {
    private $id;
    private $nome;
    private $DataAd;
    private $email;
    private $cidade;
    private $Formacao;
    private $AreaAtuacao;
    private $telefone;
    
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }

    function getDataAd() {
        return $this->dataAd;
    }

    function getEmail() {
        return $this->email;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getFormacao() {
        return $this->formacao;
    }
    function getAreaAtuacao() {
        return $this->areaAtuacao;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setId($id) {
        $this->id = $id;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDataAd($dataAd) {
        $this->dataAd = $dataAd;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }


    function setFormacao($formacao) {
        $this->formacao = $formacao;
    }

    function setAreaAtuacao($areaAtuacao) {
        $this->areaAtuacao = $areaAtuacao;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

}
