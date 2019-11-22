<?php
include('conexao.php');


$query = "INSERT INTO alunos (nome, cpf, curso) VALUES (";
$query .= "'".$_POST['nome']."', ";
$query .= "'".$_POST['cpf']."', ";
$query .= "'".$_POST['curso']."' ";
$query .= ")";

if(mysqli_query($conexao, $query)){
    header('Location: ../portal-professor.php');
}else{
    echo '<h1>Erro na inserção</h1>';
}
