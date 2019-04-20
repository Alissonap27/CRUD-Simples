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
        $livro->setEdicao($edicao);
        $livro->setDataPu($dataPu);


       $retorno = LivroDao::inserir($livro);
       
       if($retorno){         
           header("Location: ../PagLivro.php?exibir");
       }
        
        
        echo 'Nome:  ' . $nome;
        echo '<br/>editora: ' . $editora;
        echo '<br/>Edicao: ' . $edicao;
        echo '<br/>DataPu: ' . $dataPu;
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
        header("Location: ../PagLivro.php");
     }else{
         header("Location: ../index.php?erroExcluir");
         
     }
     
}     
    if(isset($_REQUEST['editar'])){
         
        $id = $_GET['idLivro'];
         
    
        $nome = $_POST['txNome'];
        $editora = $_POST['txEditora'];
        $dataPu = $_POST['txDataPu'];
        $edicao = $_POST['txEdicao'];
        

        $livro = new Livro();
        $livro->setId($id);
        $livro->setNome($nome);
        $livro->setEditora($editora);
        $livro->setDataPu($dataPu);
        $livro->setEdicao($edicao);
        
        $retorno = LivroDao::editar($livro);
         
         if ($retorno){
            header("Location: ../PagLivro.php");   
         }else{
            header("Location: ../index.php");    
         }
   
         
         
     }?>
    











