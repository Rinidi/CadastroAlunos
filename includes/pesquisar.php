<?php
session_start();
include('control/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Escola CEP</title>
    <link rel='stylesheet' type='text/css' href='../css/estilo.css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <!-- Css padrao -->
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-10 is-offset-1">
                    <h3>Cadastrar Aluno</h3>
                    <div class="box">
                        <div class="container margin-top-md">
                            <table class="table table-hover">
                                <?php if (isset($_POST['search'])) : ?>
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">CPF</th>
                                            <th scope="col">Curso</th>
                                            <th scope="col">Detalhes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i = 1;
                                            $searchq = $_POST['search'];
                                            $query = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome LIKE '%$searchq%' order by nome");
                                            while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $row['nome']; ?></td>
                                                <td><?php echo $row['cpf']; ?></td>
                                                <td><?php echo $row['curso']; ?></td>
                                                <td>
                                                    <a href="editar.php?id=<?php echo $row['id']; ?>"><img class="icon" src="../img/pencil-icon.png" /></a>
                                                    <a href="excluir.php?id=<?php echo $row['id']; ?>"><img class="icon" src="../img/cross-icon.png" /></a>
                                                    </th>
                                            </tr>
                                        <?php $i++;
                                            } ?>
                                    </tbody>
                                <?php endif; ?>
                            </table>
                            <form action="pesquisar.php" method="post">
                                <div class="row justify-content-center">
                                    <div class="col-4 col-xl-3 col-lg-3 col-md-4 col-sm-4">
                                        <input name="search" class="input is-medium" type="text" placeholder="Pesquisar" required>
                                    </div>
                                    <div class="col-3 col-xl-2 col-lg-2 col-md-3 col-sm-3">
                                        <button id="btn-pesquisar" type="submit" class="button is-block is-dark is-large" role="button">Pesquisar</a>
                                    </div>
                                </div>
                            </form>
                            <div class="row justify-content-end">
                                <a href="portal-professor.php" id="btn-voltar" class="button is-block is-dark is-large" role="button">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p class="foot align-center">&copy; CepBrasópolis</p>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../jquery/dist/jquery.js"></script>
    <script src="../popper.js/dist/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>