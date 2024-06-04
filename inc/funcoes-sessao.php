<?php
/* Sessões no PHP
Funcionalidade usada para o controle de acesso à determinadas páginas e/ou recursos do site.


Exemplos: área administrativa, painel de controle, área de cliente/aluno etc. 

Nestas áreas o acesso só é possível meidante alguma forma de autenticação. Exemplos: login/senha, digital, facial etc.*/

// Verificando se não há/existe uma sessão em funcionamento
if(!isset($_SESSION)){
    //então, inicie uma sessão
    session_start();
}

function verificandoAcesso(){
    /* Se NÃO EXISTIR uma variável de sessão chamada "id" (baseada nos ids usuários do banco), então significa que o usuário NÃO ESTÁ LOGADO. */
    if(!isset($_SESSION['id'])){
        // Portanto, destruímos a sessão
        session_destroy();

        // Fazemos o usuário voltar para a página login
        header("location:../login.php");

        // Paramos qualquer outra execução/processamento
        exit; //ou die()
    }
}

?>