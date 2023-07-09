<?php
   session_start();
    // Database connection
    include('conectar.php');
    include('config.php');
    include('logar.php');
    include('/loja/comprar.php');
    
    
    $dadoscf = $_POST['dadoscf'];
    $valorcf = $_POST['valorcf'];
    $notacf = $_SESSION['nota'];
    $cpbarato = $_SESSION['nota'] + $valorcf;
    date_default_timezone_set('America/Sao_Paulo');
    $agora = date('d/m/Y H:i:s', time());
    $nomee = $_SESSION['usuario'];
    $senhaa = $_SESSION['senha'];
    $emailll = $_SESSION['mail'];
    
    
    
    
 //Mandando email para confirmação   
if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}

$emaill = "maycondouglas1702@gmail.com";
$assuntoo = "O $nomee comprou";
$mensagemm = "Jogador: $nomee. \r\n Verificar compra de $valorcf notas, na data $agora. \r\n conta email: $emailll. \r\n Valor anterior $notacf. \r\n Valor somado $cpbarato.";


$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: road@roadgamesbrgo.ga\r\n"; // remetente
$headers .= "Return-Path: road@roadgamesbrgo.ga\r\n"; // return-path
$envio = mail($emaill, $assuntoo, $mensagemm, $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";



    
                                
                                            ///////////////////////////////////////////////////////
                                            ///////////////UPDATE ONLINE STATUS///////////////////

                                             if(isset($_POST['enviar'])) {
    
                                            $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
                                            // Check connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            } 
 
                                            
                                            $req = $_SESSION['loginreqkey'];  
    
                                            $sql = "UPDATE fzdsn SET $dadoscf='$cpbarato' WHERE loginreqkey='$req'";

                                            if ($conn->query($sql) === TRUE) {
                                                
                                                header("Location: painel.php");
                                                
                                                
                                            } else {
                                                echo "error" . $conn->error;
                                            }
                                                $conn->close();
                                                
                                                 return false;
                                            }
                                            
                                            
                                            










?>
      
