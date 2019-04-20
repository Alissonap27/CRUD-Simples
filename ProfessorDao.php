<?php

include_once 'Professor.php';
include_once 'Conexao.php';

class ProfessorDao {
    public static function editar(Professor $professor){
        $sql = "UPDATE professor SET"
        
            . " nome = '".$professor->getNome()."' ,"
            . " dataAd = '".$professor->getDataAd()."' ,"
            . " email = '".$professor->getEmail()."' ,"
            . " cidade = '".$professor->getCidade()."' ,"
            . " formacao = '".$professor->getFormacao()."' ,"
            . " areaAtuacao = '".$professor->getAreaAtuacao()."' ,"
            . " telefone = '".$professor->getTelefone() . "'"
            . " WHERE id = ".$professor->getId();
        
        
        $conn = new Conexao();
        $retorno = $conn->executar($sql);
                echo $sql;
        return $retorno;
        
    }

    



    public static function inserir(Professor $professor) {
        $sql = "INSERT INTO professor (nome, dataAd, email, cidade, "
                . "formacao, areaAtuacao, telefone )VALUES "
                . "('" . $professor->getNome() . "',"
                . "'" . $professor->getDataAd() . "',"
                . "'" . $professor->getEmail() . "',"
                . "'" . $professor->getCidade() . "',"
                . "'" . $professor->getFormacao() . "',"
                . "'" . $professor->getAreaAtuacao() . "',"
                . "'" . $professor->getTelefone() . "');";



        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getProfessor() {
        $sql = "Select * FROM professor ORDER BY nome ";
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();

        while (list($id, $nome, $dataAd, $email,
        $cidade, $formacao, $areaAtuacao, $telefone) = mysqli_fetch_row($result)) {

            $professor = new Professor();
            $professor->setId($id);
            $professor->setNome($nome);
            $professor->setDataAd($dataAd);
            $professor->setEmail($email);
            $professor->setCidade($cidade);
            $professor->setFormacao($formacao);
            $professor->setAreaAtuacao($areaAtuacao);
            $professor->setTelefone($telefone);
            $lista->append($professor);
        }

        return $lista;
    }

        
    public static function excluir($professor){
        $sql = " DELETE FROM professor "
                . " where id = " . $professor->getId();
        
        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
        
    }
    
    public static function getProfessorById($idProfessor){
        $sql = "Select * FROM professor WHERE professor.id= ".$idProfessor;
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();
        
        list($id, $nome, $dataAd, $email,
        $cidade, $formacao, $areaAtuacao, $telefone) = mysqli_fetch_row($result);

            $professor = new Professor();
            $professor->setId($id);
            $professor->setNome($nome);
            $professor->setDataAd($dataAd);
            $professor->setEmail($email);
            $professor->setCidade($cidade);
            $professor->setFormacao($formacao);
            $professor->setAreaAtuacao($areaAtuacao);
            $professor->setTelefone($telefone);
            return $professor;
        
    }
}
