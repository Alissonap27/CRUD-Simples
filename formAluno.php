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
                include_once './AlunoDao.php';
                
                $nome ="";  $matricula="";
                $email ="";  $telefone="";
                $bairro="";  $cidade="";
                $action = "inserir";
                
                
                $action = "inserir";
                
                    if (isset($_REQUEST['editar'])){
                        $idAluno = $_REQUEST['idAluno'];
                    
                        $aluno = AlunoDao::getAlunoById($idAluno);
                        
                        $nome = $aluno->getNome();
                        $telefone = $aluno->getTelefone();
                        $email = $aluno->getEmail();
                        $matricula = $aluno->getMatricula();
                        $cidade = $aluno->getCidade();
                        $bairro = $aluno->getBairro();
                        $action = "editar&idAluno=" . $idAluno;
                        
                    }
                
                
            ?>
            <form action="controller/AlunoController.php?<?php echo $action; ?>" method="post" id="idFrmAluno">
                <table >
                    <tr>
                        <td>
                            <label> Nome </label>
                        </td>
                        <td> 
                            <input  class="form-control" type="text" id="txNome" name="txNome" value="<?= $nome ?>" required>
                        </td>
                    </tr>
                    <tr>                            
                        <td>
                            <label> Matricula </label>
                        </td>
                        <td>
                            <input  class="form-control"  type="number" id="txMatricula" name="txMatricula" value="<?= $matricula ?>" required>
                        </td>
                    </tr>                        
                    <tr>
                        <td>
                            <label> E-mail </label>
                        </td>
                        <td>
                            <input  class="form-control" type="email" id="txEmail" name="txEmail" value="<?= $email ?>" required>
                        </td>
                    </tr>                        
                    <tr>
                        <td>
                            <label> Telefone </label>
                        </td>
                        <td>
                            <input  class="form-control" type="text" id="txFone" name="txFone" value="<?= $telefone ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Bairro: </label>
                        </td>
                        <td>
                            <input  class="form-control" type="text" id="txBairro" name="txBairro" value="<?= $bairro ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Cidade: </label>
                        </td>
                        <td>
                            <input  class="form-control" type="text" id="txCidade" name="txCidade" value="<?= $cidade ?>" required>
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