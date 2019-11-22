<?php
session_start();
include('control/verifica_login.php');
include('control/conexao.php');
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $query = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome LIKE '%$searchq%'");
    $c = mysqli_num_rows($query);
    if ($c == 0) {
        $res = "Sem Resultados para a busca";
    } else {
        $res = "aaaaaaaa";
    }
} else {
    $query = mysqli_query($conexao, "SELECT * FROM alunos order by nome");
}
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
    <link rel="stylesheet" href="../css/estilo.css">
    <!-- Css padrao -->
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3>Portal do professor</h3>
                    <div class="box format">
                        <a href="lista.php" id="btn-listar" class="button is-block is-dark is-large is-fullwidth margin-sm-top" role="button">Listar Alunos</a>
                        <a href="cadastrar-aluno.php" id="btn-cadastrar" class="button is-block is-dark is-large is-fullwidth margin-sm-top" role="button">Cadastrar Aluno</a>
                        <a href="pesquisar.php" id="btn-cadastrar" class="button is-block is-dark is-large is-fullwidth margin-sm-top" role="button">Pesquisar Aluno</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p class="foot align-center">&copy; CepBrasópolis</p>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/portal-professor.js"></script>
    <script src="../jquery/dist/jquery.js"></script>
    <script src="../popper.js/dist/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>