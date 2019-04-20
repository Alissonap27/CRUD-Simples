<?php
include_once '../Professor.php';
include_once '../ProfessorDao.php';
include_once '../Conexao.php';

if (isset($_REQUEST['inserir'])) {
    if ($_POST['txNome'] != "") {
        $nome = $_POST['txNome'];
        $dataAd = $_POST['txDataAd'];
        $email = $_POST['txEmail'];
        $cidade = $_POST['txCidade'];
        $formacao = $_POST['txFormacao'];
        $areaAtuacao = $_POST['txAreaAtuacao'];
        $telefone = $_POST['txFone'];

        $professor = new Professor();
        $professor->setNome($nome);
        $professor->setDataAd($dataAd);
        $professor->setEmail($email);
        $professor->setCidade($cidade);
        $professor->setFormacao($formacao);
        $professor->setAreaAtuacao($areaAtuacao);
        $professor->setTelefone($telefone);

       $retorno = ProfessorDao::inserir($professor);
       
       if($retorno){         
           header("Location: ../index.php?exibir");
       }
        
        
        echo 'Nome:  ' . $nome;
        echo '<br/> dataAd: ' . $dataAd;
        echo '<br/>Email: ' . $email;
        echo '<br/>Cidade: ' . $cidade;
        echo '<br/>Número: ' . $formacao;
        echo '<br/>AreaAtuacao: ' . $areaAtuacao;
        echo '<br/>Telefone: ' . $telefone;
    } else {
        echo 'Nenhum Dado Cadastrado!';
    } 
    
}


if (isset($_REQUEST['excluir'])) {
    
    $id = $_GET['idProfessor'];
 
   
    $professor = new Professor();
    $professor->setId($id);
    
    $retorno = ProfessorDao::excluir($professor);
    
    
     if( $retorno ) {
        header("Location: ../index.php");
     }else{
         header("Location: ../index.php?erroExcluir");
         
     }
    
}










