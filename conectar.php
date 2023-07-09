<?php
    $servidor = "localhost";
    $usuario = "u237827616_road";
    $senha = "Goias41413254";
    $dbname = "u237827616_road";    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
?> 