<?php
session_start();
include('conectar.php');

$strcon = $conn;



$username = $_REQUEST["username"]; 
$password = $_REQUEST["password"]; 
$email = $_REQUEST["email"];

//Dados Index

$username = $_GET['username'];
$email    = $_GET['email'];
$password = $_GET['password'];

       


$SecretKey = mt_rand(1,50);
$chavesecreta = mt_rand(0000000001,9999999999);
$authkey = hash_hmac('sha512', $value, $SecretKey);
//Definindo tempo basil
date_default_timezone_set('America/Sao_Paulo');
$agora = date('d/m/Y H:i:s', time());
$password = md5($password);

 // check if email already exist
        $username_check_query = mysqli_query($strcon, "SELECT * FROM fzdsn WHERE username = '{$username}' ");
        $rowCount = mysqli_num_rows($username_check_query);
        
         if($rowCount > 0) {
                 echo "Jogador ja existe";
            } else {

$sql = "INSERT INTO fzdsn (username, password, loginreqkey, idpublico, status, rank, nivel, nick, mnome, upnivel, moad, nota, exp, expneeded, icoperfil, datainicio, tiqueroleta, rodadas, totalrodadas, anuncio, fase, tiquepuloduplo, tique2xmoedas, tique6xmoedas, tiquebaubonus, ganhobaubonus, skins, dskins, premio, dadosevento, gamejolt, banned, mail)
    VALUES ('$username', '$password','$authkey', '$chavesecreta', 'offline', 'jogador', '1', '$username-$authkey', '1', '0', '100', '0', '0', '150', '0', '$agora', '10', '0', '0', '0', '1', '0', '0', '0', '0', '0', 'it01,it02,it03,it04,it05', 'it01', '', '', '', '', '$email')"; 


mysqli_query($strcon,$sql) or die("Erro ao tentar excluir registro");

// Verificar se algum registro foi excluído ou não
if (mysqli_affected_rows($strcon)) {  // se houver linhas afetadas, o dado foi excluído
    die("successfully");
    
}
else {
    mysqli_close($strcon);
    die("Erro ao tentar cadastra");
}
// Fechar a conexão
mysqli_close($strcon);
// Redirecionar para página inicial após 5 segundos:
header("refresh:2;url=index.php");

}

?>