<?php

class Aluno {
    private $id;
    private $nome;
    private $matricula;
    private $email;
    private $telefone;
    private $bairro;
    private $cidade;
    
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }


    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }
    
    function setId($id) {
        $this->id = $id;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }


    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }



}
