<?php
include_once '../Livro.php';
include_once '../LivroDao.php';
include_once '../Conexao.php';

if (isset($_REQUEST['inserir'])) {
    if ($_POST['txNome'] != "") {
        $nome = $_POST['txNome'];
        $editora = $_POST['txEditora'];
        $edicao = $_POST['txEdicao'];
        $dataPu = $_POST['txDataPu'];


        $livro = new Livro();
        $livro->setNome($nome);
        $livro->setEditora($editora);
        $livro->setDataPu($dataPu);
        $livro->setEdicao($edicao);
        

       $retorno = LivroDao::inserir($livro);
       
       if($retorno){         
           header("Location: ../index.php?exibir");
       }
        
        
        echo 'Nome:  ' . $nome;

    } else {
        echo 'Nenhum Dado Cadastrado!';
    } 
    
}


if (isset($_REQUEST['excluir'])) {
    
    $id = $_GET['idLivro'];
 
   
    $livro = new Livro();
    $livro->setId($id);
    
    $retorno = LivroDao::excluir($livro);
    
    
     if( $retorno ) {
        header("Location: ../index.php");
     }else{
         header("Location: ../index.php?erroExcluir");
         
     }
    
}










