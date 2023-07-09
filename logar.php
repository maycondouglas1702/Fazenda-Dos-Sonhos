<?php
   session_start();
    // Database connection
    include_once("conectar.php");
    
    $connection = $conn;
    
    $login_usuario = $_REQUEST["username"]; 
    $login_senha = $_REQUEST["password"]; 
    
    
    if(isset($_POST['login'])) {
        $login_usuario = $_POST['login-usuario'];
        $login_senha2 = $_POST['md-senha'];
        $login_senha1 = $_POST['login-senha'];
        
        
        if (empty($login_senha1)){
           
            $login_senha = $login_senha2;
            
            
        }else{
            $login_senha = md5($login_senha1);
         
        }
         
        
        // clean data 
        $user_email = filter_var($login_usuario, FILTER_SANITIZE_EMAIL);
        $pswd = mysqli_real_escape_string($connection, $login_senha);
        
        // Query if email exists in db
        $sql = "SELECT * From fzdsn WHERE username = '{$login_usuario}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);
        
        // If query fails, show the reason 
        if(!$query){
           die("SQL query failed: " . mysqli_error($connection));
        }
        if(!empty($login_usuario) && !empty($login_senha)){
            
            //if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{3,20}$/", $pswd)) {
               
            //    echo "Password should be between 3 to 20 charcters long, contains atleast one special chacter, lowercase, uppercase and a digit.";
                        
            //}
            // Check if email exist
            if($rowCount <= 0) {
                
                echo "User account does not exist.";
                
            } else {
                // Fetch user data and store in php session
                while($row = mysqli_fetch_array($query)) {
                    $uid             = $row['uid'];
                    $usuario         = $row['username'];
                    $senha           = $row['password'];
                    $loginreqkey     = $row['loginreqkey'];
                    $idpublico       = $row['idpublico'];
                    $status          = $row['status'];
                    $rank            = $row['rank'];
                    $nivel           = $row['nivel'];
                    $nick            = $row['nick'];
                    $mnome           = $row['mnome'];
                    $upnivel         = $row['upnivel'];
                    $moad            = $row['moad'];
                    $nota            = $row['nota'];
                    $exp             = $row['exp'];
                    $expneeded       = $row['expneeded'];
                    $icoperfil       = $row['icoperfil'];
                    $tiqueroleta     = $row['tiqueroleta'];
                    $datainicio      = $row['datainicio'];
                    $rodadas         = $row['rodadas'];
                    $totalrodadas    = $row['totalrodadas'];
                    $anuncio         = $row['anuncio'];
                    $fase            = $row['fase'];
                    $tiquepuloduplo  = $row['tiquepuloduplo'];
                    $tique2xmoedas   = $row['tique2xmoedas'];
                    $tique6xmoedas   = $row['tique6xmoedas'];
                    $tiquebaubonus   = $row['tiquebaubonus'];
                    $ganhobaubonus   = $row['ganhobaubonus'];
                    $skins           = $row['skins'];
                    $dskins          = $row['dskins'];
                    $premio          = $row['premio'];
                    $dadosevento     = $row['dadosevento'];
                    $banned          = $row['banned'];
                    $mail            = $row['mail'];

                }
                // Verify password
                $password = password_verify($login_senha, $senha);
                
                // Allow only verified user
                if($status == 'offline' or 'online') {
                    
                    if($login_usuario == $usuario && $login_senha == $senha) {
                       header("Location: painel.php");
                       
                    $_SESSION['id'] = $uid;
					$_SESSION['usuario'] = $usuario;
					$_SESSION['senha'] = $senha;
					$_SESSION['loginreqkey'] = $loginreqkey;
					$_SESSION['idpublico'] = $idpublico;
					$_SESSION['status'] = $status;
					$_SESSION['rank'] = $rank;
					$_SESSION['nivel'] = $nivel;
					$_SESSION['nick'] = $nick;
					$_SESSION['mnome'] = $mnome;
					$_SESSION['mnome'] = $mnome;
					$_SESSION['moad'] = $moad;
					$_SESSION['nota'] = $nota;
					$_SESSION['exp'] = $exp;
					$_SESSION['expneeded'] = $expneeded;
					$_SESSION['icoperfil'] = $icoperfil;
					$_SESSION['tiqueroleta'] = $tiqueroleta;
					$_SESSION['datainicio'] = $datainicio;
					$_SESSION['rodadas'] = $rodadas;
					$_SESSION['totalrodadas'] = $totalrodadas;
					$_SESSION['anuncio'] = $anuncio;
					$_SESSION['fase'] = $fase;
					$_SESSION['tiquepuloduplo'] = $tiquepuloduplo;
					$_SESSION['tique2xmoedas'] = $tique2xmoedas;
					$_SESSION['tique6xmoedas'] = $tique6xmoedas;
					$_SESSION['tiquebaubonus'] = $tiquebaubonus;
					$_SESSION['ganhobaubonus'] = $ganhobaubonus;
					$_SESSION['skins'] = $skins;
					$_SESSION['dskins'] = $dskins;
					$_SESSION['premio'] = $premio;
					$_SESSION['dadosevento'] = $dadosevento;
					$_SESSION['banned'] = $banned;
					$_SESSION['mail'] = $mail;
                       
                    } else {
                        
                        echo "Usuario ou senha incorretos.";
                        
                    }
                } else {
                    
                    echo " Account verification is required for login.";
                    
                }
            }
        } else {
            if(empty($login_usuario)){
                
                echo "Usuario não fornecido.";
                
            }
            
            if(empty($login_senha)){
                
                        echo "Senha não fornecido.";
            }            
        }
    }
?>