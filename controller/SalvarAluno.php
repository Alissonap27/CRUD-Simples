<?php
include_once '../Aluno.php';
include_once '../AlunoDao.php';
include_once '../Conexao.php';

if (isset($_REQUEST['inserir'])) {
    if ($_POST['txNome'] != "") {
        $nome = $_POST['txNome'];
        $matricula = $_POST['txMatricula'];
        $email = $_POST['txEmail'];
        $telefone = $_POST['txFone'];
        $bairro = $_POST['txBairro'];
        $cidade = $_POST['txCidade'];

        $aluno = new Aluno();
        $aluno->setNome($nome);
        $aluno->setMatricula($matricula);
        $aluno->setEmail($email);
        $aluno->setTelefone($telefone);
        $aluno->setBairro($bairro);
        $aluno->setCidade($cidade);

       $retorno = AlunoDao::inserir($aluno);
       
       if($retorno){         
           header("Location: ../index.php?exibir");
       }
        
        
        echo 'Nome:  ' . $nome;
        echo '<br/> Matricula: ' . $matricula;
        echo '<br/>Email: ' . $email;
        echo '<br/>Telefone: ' . $telefone;
        echo '<br/>Bairro: ' . $bairro;
        echo '<br/>Cidade: ' . $cidade;
    } else {
        echo 'Nenhum Dado Cadastrado!';
    } 
    
}


if (isset($_REQUEST['excluir'])) {
    
    $id = $_GET['idAluno'];
 
   
    $aluno = new Aluno();
    $aluno->setId($id);
    
    $retorno = AlunoDao::excluir($aluno);
    
    
     if( $retorno ) {
        header("Location: ../index.php");
     }else{
         header("Location: ../index.php?erroExcluir");
         
     }
    
}










