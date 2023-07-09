<?php
    include('conectar.php');
    include('config.php');
    include('logar.php');
      
 session_start();
    
    
    
        
    $dados = $_SESSION['dados'];
    $valor = $_SESSION['valor'];
    
    $cpbarato = $_SESSION['moad'] + $valor;
    

                        
                                        ///////////////////////////////////////////////////////
                                        ///////////////UPDATE ONLINE STATUS///////////////////

                                             if(isset($_POST['enviar'])) {
    
                                            $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            } 
 
                                            $status = $cpbarato;
                                            $req = $_SESSION['loginreqkey'];  
    
                                            $sql = "UPDATE fzdsn SET $dados='$cpbarato' WHERE loginreqkey='$req'";

                                            if ($conn->query($sql) === TRUE) {
                                                echo "successfully";
                                                header("Location: painel.php");
                                            } else {
                                                echo "error" . $conn->error;
                                            }
                                                $conn->close();
                                                
                                                 return false;
                                            }






?>