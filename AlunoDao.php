<?php

include_once 'Aluno.php';
include_once 'Conexao.php';

class AlunoDao {
    public static function editar(Aluno $aluno){
        $sql = "UPDATE aluno SET"
        
            . " nome = '".$aluno->getNome()."' ,"
            . " matricula = '".$aluno->getMatricula()."' ,"
            . " email = '".$aluno->getEmail()."' ,"
            . " telefone = '".$aluno->getTelefone()."' ,"
            . " bairro = '".$aluno->getBairro()."' ,"
            . " cidade = '".$aluno->getCidade(). "'"
            . " WHERE id = ".$aluno->getId();
        
        
        $conn = new Conexao();
        $retorno = $conn->executar($sql);
                echo $sql;
        return $retorno;
        
    }

    



    public static function inserir(Aluno $aluno) {
        $sql = "INSERT INTO aluno (nome, matricula, email, telefone, bairro, "
                . " cidade )VALUES "
                . "('" . $aluno->getNome() . "',"
                . "'" . $aluno->getMatricula() . "',"
                . "'" . $aluno->getEmail() . "',"
                . "'" . $aluno->getTelefone() . "',"
                . "'" . $aluno->getBairro() . "',"
                . "'" . $aluno->getCidade() . "');";
                



        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getAluno() {
        $sql = "Select * FROM aluno ORDER BY nome ";
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();

        while (list($id, $nome, $matricula, $email, $telefone,
        $bairro, $cidade) = mysqli_fetch_row($result)) {

            $aluno = new Aluno();
            $aluno->setId($id);
            $aluno->setNome($nome);
            $aluno->setMatricula($matricula);
            $aluno->setEmail($email);
            $aluno->setTelefone($telefone);
            $aluno->setBairro($bairro);
            $aluno->setCidade($cidade);
            $lista->append($aluno);
        }

        return $lista;
    }

        
    public static function excluir($aluno){
        $sql = " DELETE FROM aluno "
                . " where id = " . $aluno->getId();
        
        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
        
    }
    
    public static function getAlunoById($idAluno){
        $sql = "Select * FROM aluno WHERE aluno.id= ".$idAluno;
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();
        
        list($id, $nome, $matricula, $email, $telefone,
        $bairro, $cidade) = mysqli_fetch_row($result);

            $aluno = new Aluno();
            $aluno->setId($id);
            $aluno->setNome($nome);
            $aluno->setMatricula($matricula);
            $aluno->setEmail($email);
            $aluno->setTelefone($telefone);
            $aluno->setBairro($bairro);
            $aluno->setCidade($cidade);
            return $aluno;
        
    }
}
