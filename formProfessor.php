<!DOCTYPE html>
<html lang="br">
    <head>
        <title>SGE</title>
        <meta charset="utf-8">
        <meta name="author" content="pixelhint.com">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="css/bootstrap.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="wrapper">
                    <a href="index.php">
                        <img src="img/logo.png" class="logo"/>
                    </a>
                    <nav>
                        <ul>
                            <li><a href="PagAluno.php">Aluno</a></li>
                            <li><a href="PagProfessor.php">Professor</a></li>
                            <li><a href="PagLivro.php">Livro</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <?php 
                include_once './ProfessorDao.php';
                
                $nome ="";  $dataAd="";
                $email ="";  $cidade="";
                $formacao =""; $areaAtuacao =""; $telefone=""; 
                $action = "inserir";
                
                
                $action = "inserir";
                
                    if (isset($_REQUEST['editar'])){
                        $idProfessor = $_REQUEST['idProfessor'];
                    
                        $professor = ProfessorDao::getProfessorById($idProfessor);
                        
                        $nome = $professor->getNome();
                        $dataAd = $professor->getDataAd();
                        $email = $professor->getEmail();
                        $cidade = $professor->getCidade();
                        $formacao = $professor->getFormacao();
                        $areaAtuacao = $professor->getAreaAtuacao();
                        $telefone = $professor->getTelefone();
                        $action = "editar&idProfessor=" . $idProfessor;
                        
                    }
                
                
            ?>
            <form action="controller/ProfessorController.php?<?php echo $action; ?>" method="post" id="idFrmProfessor">
                <table border="1">
                    <tr>
                        <td>
                            <label> Nome </label>
                        </td>
                        <td> 
                            <input class="form-control" type="text" id="txNome" name="txNome" value="<?= $nome ?>" required>
                        </td>
                    </tr>
                    <tr>                            
                        <td>
                            <label> Data de Admissão </label>
                        </td>
                        <td>
                            <input class="form-control" type="date" id="txDataAd" name="txDataAd" value="<?= $dataAd ?>" required>
                        </td>
                    </tr>                        
                    <tr>
                        <td>
                            <label> E-mail </label>
                        </td>
                        <td>
                            <input class="form-control" type="email" id="txEmail" name="txEmail" value="<?= $email ?>" required>
                        </td>
                    </tr>                        
                    <tr>
                        <td>
                            <label> Cidade: </label>
                        </td>
                        <td>
                            <input class="form-control" type="text" id="txCidade" name="txCidade" value="<?= $cidade ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Formacao: </label>
                        </td>
                        <td>
                            <input class="form-control" type="text" id="txFormacao" name="txFormacao" value="<?= $formacao ?>" required >
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <label> Area Atuacao: </label>
                        </td>
                        <td>
                             <input class="form-control" type="text" id="txAreaAtuacao" name="txAreaAtuacao" value="<?= $areaAtuacao ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Telefone </label>
                        </td>
                        <td>
                            <input class="form-control" type="text" id="txFone" name="txFone" value="<?= $telefone ?>" required>
                        </td>
                    </tr> 
                </table>  </br>                
                <input class="btn btn-secondary" type="submit" id="btnEnviar" name="btnEnviar"/>
                <input class="btn btn-secondary" type="reset" id="btnLimpar" name="btnLimpar"/>
            </form> </br></br>
            <footer>  
                <div class="wrapper">
                    <p class="copyrights">Desenvolvido Por Alisson &copy;2018 - Todos os direitos reservados</p>
                </div>
            </footer>
            <script type="text/javascript" src="../ga.js"></script>
        </div>
    </body>
</html>