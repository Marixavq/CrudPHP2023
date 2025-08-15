<?php
include("conexao.php");
$id         =       $_POST['id'];
$nome       =       $_POST['nome'];
$email      =       $_POST['email'];
$celular    =       $_POST['celular'];

$editar     =       "UPDATE tbclientes SET nome='$nome', email='$email', celular='$celular' WHERE id='$id'";

$queryCadastro = mysqli_query($mysqli,$editar);

header("location:index.php");

?>