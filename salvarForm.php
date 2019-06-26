<?php
//var_dump($_POST);
    
    include_once 'conexao.php';
    try {
        $query = $db->prepare('INSERT INTO email (email) VALUES (?)');
        //$query = $db->prepare('INSERT INTO email (email) VALUES ("'.$_POST['email'].'")');
        //Para executar
        $resultado = $query->execute([$_POST['email']]);
    
        //para
        if ($resultado) {
            echo "<h1>Cadastro concluido!</h1>";
        }
        else {
            echo "<h1> Erro ao cadastrar!</h1>";
        }
      //Aqui dentro do parametro vamos pegar os recursos do PDO e colocar numa variavel 
    }
    //catch(PDOException $ex){
       catch(Exception $ex){
       // echo $ex->getMessage(); Mensagem de erro, ele mostra para o programador.
       echo "Serviço indisponivel";
    }
     

    
    
    

   
