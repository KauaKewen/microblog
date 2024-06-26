<?php
require "inc/cabecalho.php"; 
require "inc/funcoes-noticias.php";

 /* Aplicamos uma conversão/casting forçada para valor inteiro. Portanto, se não for um número válidp/existente, o comando SQL não é executado e os erros não expõem detalhes do banco/função/comando */
$id = (int)$_GET['id'];

$noticiaCompleta = lerNoticiaCompleta($conexao, $id);
?>


<div class="row my-1 mx-md-n1">

    <article class="col-12">
        <h2><?=$noticiaCompleta['titulo']?></h2>
        <p class="font-weight-light">
            <time><?=formataData($noticiaCompleta['data'])?></time> - <span><?=$noticiaCompleta['nome']?></span>
        </p>
        <img src="imagens/<?=$noticiaCompleta['imagem']?>" alt="" class="float-start pe-2 img-fluid">
        <p class="ajusta-texto"><?=$noticiaCompleta['texto']?></p>
    </article>
    

</div>        

<?php 
require_once "inc/rodape.php";
?>

