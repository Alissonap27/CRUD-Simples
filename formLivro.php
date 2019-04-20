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
                include_once './LivroDao.php';
                
                $nome ="";  $editora=""; $dataPu ="";
                 $edicao =""; 
                $action = "inserir";
                
                    if (isset($_REQUEST['editar'])){
                        $idLivro = $_REQUEST['idLivro'];
                    
                        $livro = LivroDao::getLivroById($idLivro);
                        
                        $nome = $livro->getNome();
                        $editora = $livro->getEditora();
                        $dataPu = $livro->getDataPu();
                        $edicao = $livro->getEdicao();
                        
                        
                        $action = "editar&idLivro=" . $idLivro;
                        
                    }
                
                
            ?>
            <form action="controller/LivroController.php?<?php echo $action; ?>" method="post" id="idFrmLivro">
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
                            <label> Editora </label>
                        </td>
                        <td>
                            <input class="form-control"  type="text" id="txEditora" name="txEditora" value="<?= $editora ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Data de Publicação: </label>
                        </td>
                        <td>
                            <input class="form-control"  type="date" id="txDataPu" name="txDataPu" value="<?= $dataPu ?>" required>
                        </td>    
                    </tr> 
                    <tr>
                        <td>
                            <label> Edicao </label>
                        </td>
                        <td>
                             <input class="form-control"  type="number" id="txEdicao" name="txEdicao" value="<?= $edicao ?>" required>
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