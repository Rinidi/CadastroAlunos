<?php
session_start();
include('control/verifica_login.php');
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Escola CEP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Estilo padrão -->
    <link rel="stylesheet" href="../css/professor.css">
</head>

<body>
    <div class="container painel">
        <div class="columns is-3 ">
            <div class="column is-one-quarter side">
                is-one-third
            </div>
            <div class="column">
                <table class="table table-hover">
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
                        $query = "SELECT * FROM alunos";
                        $row = mysqli_query($conexao, $query);
                        while (mysqli_fetch_array($row)) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo $row['nome']; ?></td>
                                <td><?php echo $row['cpf']; ?></td>
                                <td><?php echo $row['curso']; ?></td>
                                <td>
                                <a href="#"><img src="../img/pencil-icon.png"/></a>
                                <a href="#"><img src="../img/eraser-icon.png"/></a>
                                <a href="#"><img src="../img/cross-icon.png"/></a>
                                    </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="row justify-content-end">
                    <div class="col-4 col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <a class="button is-dark">Cadastrar Usuário</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <p class="foot">&copy; CepBrasópolis</p>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../jquery/dist/jquery.js"></script>
    <script src="../popper.js/dist/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>