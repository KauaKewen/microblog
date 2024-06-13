<?php

require_once "../inc/funcoes-usuarios.php";
require_once "../inc/funcoes-sessao.php";

verificandoAcesso();
// Verificando se o usuário pode acessar esta página
verificaNivel();

// Obter o id do usúario que será excluido
$id = (int)$_GET['id'];

// Chamar/executar a função que irá fazer o DELETE


// Redirecionar para a página de usuários

removerUsuario($conexao, $id);

header("location:usuarios.php");



?>