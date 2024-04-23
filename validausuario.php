<?php

session_start();
include 'conexao.php';
$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

$sql = "select * from usuario where usuario=? and senha=?";

$bc = new Conexao();
$con = $bc->GetConexao();

$matheus = $con->prepare($sql);
$matheus->bindValue(1, $usuario);
$matheus->bindValue(2, $senha);
$resultado = $matheus->execute();

if ($matheus->rowCount()>0) {
    $_SESSION['usuario']=$usuario;
    $_SESSION['senha']=$senha;
    header('location:livroprincipal.php');
}else{
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}