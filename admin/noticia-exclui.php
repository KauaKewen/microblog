<?php
require_once "../inc/funcoes-noticias.php";
require_once "../inc/funcoes-sessao.php";

verificandoAcesso();


$idNoticia = (int)$_GET['id'];

$idUsuario = $_SESSION['id'];

$tipoUsuario = $_SESSION['tipo'];

excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);

header("location:noticias.php");
?>