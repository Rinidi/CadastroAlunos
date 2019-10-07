<?php
    session_start();
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
                <div class="column is-4 is-offset-4">
                    <h3>Cadastrar Aluno</h3>
                    <div class="box">
                        <form action="control/gerencia-cadastro.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" class="input is-large" placeholder="Nome" autofocus="" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cpf" class="input is-large" type="text" placeholder="CPF" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="curso" class="input is-large" type="text" placeholder="Curso" required>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-dark is-large is-fullwidth">Cadastrar Aluno</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; CepBrasópolis</p>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../jquery/dist/jquery.js"></script>
    <script src="../popper.js/dist/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>