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
                            <li><a href="PagLivro.php">Livros</a></li>
                        </ul>
                    </nav>
                </div>
            </header> </br></br>
            <?php 
                include_once './AlunoDao.php';
            ?>
            <div class="table-responsive">
                <table class="table" border="1">
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Matricula</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>

                    <?php
                    include_once './AlunoDao.php';
                    $lista = AlunoDao::getAluno();
                    foreach ($lista as $aluno) {
                    ?>
                    <tr>
                        <td> <?= $aluno->getId() ?> </td>
                        <td> <?= $aluno->getNome() ?> </td>
                        <td> <?= $aluno->getMatricula() ?> </td>
                        <td> <?= $aluno->getEmail() ?> </td>
                        <td> <?= $aluno->getTelefone() ?> </td>
                        <td> <?= $aluno->getBairro() ?> </td>
                        <td> <?= $aluno->getCidade() ?> </td>
                        
                        <td> <a class="btn btn-secondary" href="formAluno.php?editar&idAluno=<?=$aluno->getId();?> "> Editar</a> </td>
                        <td> <a class="btn btn-secondary" href="controller/AlunoController.php?excluir&idAluno=<?=$aluno->getId();?>"> Excluir </a> </td>
                     </tr> 
                     <?php
                    }
                    ?>
                </table> 
            </div> </br></br>
            <a href="formAluno.php" class="btn btn-secondary"> Cadastrar </a> </br></br>
            <footer> 
                <div class="wrapper">
                    <p class="copyrights">Desenvolvido Por Alisson &copy;2018 - Todos os direitos reservados</p>
                </div>
            </footer>
            <script type="text/javascript" src="../ga.js"></script>
        </div>
    </body>
</html>