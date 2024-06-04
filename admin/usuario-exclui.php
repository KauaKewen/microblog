<?php

require_once "../inc/funcoes-usuarios.php";

// Obter o id do usúario que será excluido
$id = $_GET['id'];

// Chamar/executar a função que irá fazer o DELETE


// Redirecionar para a página de usuários

removerUsuario($conexao, $id);

header("location:usuarios.php");



?>