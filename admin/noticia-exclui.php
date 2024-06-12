<?php
require_once "../inc/funcoes-usuarios.php";
require_once "../inc/funcoes-sessao.php";

verificandoAcesso();
verificaNivel();

$idNoticia = $_GET['id'];

$idUsuario = $_SESSION['id'];

$tipoUsuario = $_SESSION['tipo'];

excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);
?>