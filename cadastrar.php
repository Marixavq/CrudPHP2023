<?php
include("conexao.php");

$nome       =   $_POST['nome'];
$email      =   $_POST['email'];
$celular    =   $_POST['celular'];

$inserir    =   "INSERT INTO tbclientes VALUES('','$nome','$email','$celular')";

$queryCadastro  = mysqli_query($mysqli,$inserir);

header("location:index.php");



?>