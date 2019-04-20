<?php

include_once 'Livro.php';
include_once 'Conexao.php';

class LivroDao {
    public static function editar(Livro $livro){
        $sql = "UPDATE livro SET"
        
            . " nome = '".$livro->getNome()."' ,"
            . " editora = '".$livro->getEditora()."' ,"
            . " dataPu = '".$livro->getDataPu() ."' ,"
            . " edicao = '".$livro->getEdicao() . "'"
            . " WHERE id = ".$livro->getId();
        
        
        $conn = new Conexao();
        $retorno = $conn->executar($sql);
                echo $sql;
        return $retorno;
        
    }

    



    public static function inserir(Livro $livro) {
        $sql = "INSERT INTO livro (nome, editora,  "
                . "dataPu, edicao )VALUES "
                . "('" . $livro->getNome() . "',"
                . "'" . $livro->getEditora() . "',"
                . "'" . $livro->getDataPu() . "',"
                . "'" . $livro->getEdicao() . "');";



        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
    }

    public static function getLivro() {
        $sql = "Select * FROM livro ORDER BY nome ";
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();

        while (list($id, $nome, $editora,
        $dataPu, $edicao ) = mysqli_fetch_row($result)) {

            $livro = new Livro();
            $livro->setId($id);
            $livro->setNome($nome);
            $livro->setEditora($editora);
            $livro->setDataPu($dataPu);
            $livro->setEdicao($edicao);
            $lista->append($livro);
        }

        return $lista;
    }

        
    public static function excluir($livro){
        $sql = " DELETE FROM livro "
                . " where id = " . $livro->getId();
        
        $conn = new Conexao();
        $retorno = $conn->executar($sql);
        return $retorno;
        
    }
    
    public static function getLivroById($idLivro){
        $sql = "Select * FROM livro WHERE livro.id= ".$idLivro;
        $conn = new Conexao();
        $result = $conn->executar($sql);
        $lista = new ArrayObject();
        
        list($id, $nome, $editora,
        $dataPu, $edicao) = mysqli_fetch_row($result);

            $livro = new Livro();
            $livro->setId($id);
            $livro->setNome($nome);
            $livro->setEditora($editora);
            $livro->setDataPu($dataPu);
            $livro->setEdicao($edicao);
            return $livro;
        
    }
}
