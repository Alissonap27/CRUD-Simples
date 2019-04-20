<!DOCTYPE html>
<html lang="br">
    <head>
        <title>SGE</title>
        <meta charset="utf-8">
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
            </header> </br></br>
            <?php 
                include_once './LivroDao.php';
            ?>
            <div class="table-responsive">
                <table class="table" border="1">
                    <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Editora</th>
                    <th>Edicao</th>
                    <th>Data de Publicação</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                include_once './LivroDao.php';
                $lista = LivroDao::getLivro();
                foreach ($lista as $livro) {
                ?>
                <tr>
                    <td> <?= $livro->getId() ?> </td>
                    <td> <?= $livro->getNome() ?> </td>
                    <td> <?= $livro->getEditora() ?> </td>
                    <td> <?= $livro->getDataPu() ?> </td>
                    <td> <?= $livro->getEdicao() ?> </td>
                    
                    
                    
                    
                    <td> <a class="btn btn-secondary" href="formLivro.php?editar&idLivro=<?=$livro->getId();?> "> Editar</a> </td>
                    <td> <a class="btn btn-secondary" href="controller/LivroController.php?excluir&idLivro=<?=$livro->getId();?>"> Excluir </a> </td>
                 </tr> 
                 <?php
                }
                ?>
            </table> 
            </div> </br></br>
            <a href="formLivro.php" class="btn btn-secondary"> Cadastrar </a> </br></br>
            <footer> 
                <div class="wrapper">
                    <p class="copyrights">Desenvolvido Por Alisson &copy;2018 - Todos os direitos reservados</p>
                </div>
            </footer>
            <script type="text/javascript" src="../ga.js"></script>
        </div>
    </body>
</html>