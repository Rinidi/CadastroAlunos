<?php
include('conexao.php');

$query = "UPDATE alunos SET nome = '" .$_POST['nome'] . "', ";
$query .= "cpf = '".$_POST['cpf']."', ";
$query .= "curso = '".$_POST['curso']."' WHERE id ='".$_GET['id']."';"; 

if(mysqli_query($conexao, $query)){
    header('Location: ../portal-professor.php');
}else{
    echo '<h1>Erro na inserção</h1>';
}
