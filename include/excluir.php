<?php
include('control/conexao.php');

$id = $_GET['id'];
$query = "DELETE FROM alunos WHERE id='$id';";

if(mysqli_query($conexao, $query)){
    header('Location: portal-professor.php');
}else{
    echo '<h1>Erro na exclusão</h1>';
}