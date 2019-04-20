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
            </header> </br></br>
            <?php 
                include_once './ProfessorDao.php';
            ?>
            <div class="table-responsive">
                <table class="table" border="1">
                    <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Data de Admissão</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Formacao</th>
                    <th>Area de Atuacao</th>
                    <th>Telefone</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                include_once './ProfessorDao.php';
                $lista = ProfessorDao::getProfessor();
                foreach ($lista as $professor) {
                ?>
                <tr>
                    <td> <?= $professor->getId() ?> </td>
                    <td> <?= $professor->getNome() ?> </td>
                    <td> <?= $professor->getDataAd() ?> </td>
                    <td> <?= $professor->getEmail() ?> </td>
                    <td> <?= $professor->getCidade() ?> </td>
                    <td> <?= $professor->getFormacao() ?> </td>
                    <td> <?= $professor->getAreaAtuacao() ?> </td>
                    <td> <?= $professor->getTelefone() ?> </td>
                    
                    <td> <a class="btn btn-secondary" href="formProfessor.php?editar&idProfessor=<?=$professor->getId();?> "> Editar</a> </td>
                    <td> <a class="btn btn-secondary" href="controller/ProfessorController.php?excluir&idProfessor=<?=$professor->getId();?>"> Excluir </a> </td>
                 </tr>
                 <?php
                }
                ?>
            </table> 
            </div> </br></br>
            <a href="formProfessor.php" class="btn btn-secondary"> Cadastrar </a> </br></br>
            <footer> 
                <div class="wrapper">
                    <p class="copyrights">Desenvolvido Por Alisson &copy;2018 - Todos os direitos reservados</p>
                </div>
            </footer>
            <script type="text/javascript" src="../ga.js"></script>
        </div>
    </body>
</html>