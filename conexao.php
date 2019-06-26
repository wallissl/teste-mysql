<?php

    //CODIGO PARA VOCÊ FAZER A CONEXÃO COM O BANCO DE DADOS
    $dsn = "mysql:host=localhost;dbname=landpage;port=3307";
    $user = "root";
    $pass = "";

        
    ////VAMOS USAR ESSE RECURSO (TRY - TENTE) PARA TENTAR EXECUTAR A CONEXÃO SE DER ERRO VAMOS USAR O CATCH PARA EXIBIR UMA MENSAGEM DE ERRO POR EXEMPLO
    try {
    //Criar uma variavel (db) para chamar a conexão
    $db = new PDO($dsn, $user, $pass);
    }
    catch(PDOException $ex){
        echo "<h1>Houve uma falha na conexão!</h1>"; exit;
    }

?>