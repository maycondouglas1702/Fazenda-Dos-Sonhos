
<?php
//get_userinfo.php



include("config.php");
if($_GET["apireqkey"]==$requestapikey){
	
}
else{
	die("Wrong api request key!");
}

//die("test");

/////////////////////LOGIN/////////////////////////////////
if($_GET["func"]=="login"){
//connection to api
$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



$username = $_GET["user"];
$password = $_GET["passwd"];

$password = md5($password);

$query = "SELECT username, password, loginreqkey, idpublico, nick, banned FROM fzdsn WHERE username='$username' and password='$password'";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($username, $password, $loginreqkey, $gidpublico, $gnick, $gbanned);
    while ($stmt->fetch()) {
     echo "{";
	 echo '"state": "success",';
	    echo '"loginreqkey": "' . $loginreqkey . '",';
        echo '"idpublico": "' . $gidpublico . '",';
		echo '"nick": "' . $gnick . '",';
         echo '"banstatus": "' . $gbanned . '"';
        echo "}";
        
        
    }

    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();

}


/////////////////////LOGIN/////////////////////////////////
if($_GET["func"]=="loging"){
//connection to api
$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



$mail = $_GET["mail"];
$password = $_GET["passwd"];

$password = md5($password);

$query = "SELECT username, password, loginreqkey, idpublico, nick, banned, mail FROM fzdsn WHERE mail='$mail' and password='$password'";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($username, $password, $loginreqkey, $gidpublico, $gnick, $gbanned, $gmail);
    while ($stmt->fetch()) {
     echo "{";
	 echo '"state": "success",';
	    echo '"loginreqkey": "' . $loginreqkey . '",';
        echo '"idpublico": "' . $gidpublico . '",';
		echo '"nick": "' . $gnick . '",';
		echo '"banstatus": "' . $gbanned . '",';
         echo '"mail": "' . $gmail . '"';
        echo "}";
        
        
    }

    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();

}


//////////////////////////////////////////////////////
//////////////////GET BASICSTATES/////////////////////

if($_GET["func"]=="getinfo_basic"){
//connection to api
$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$req = $_GET["req"];



$query = "SELECT username, idpublico, status, rank, nivel, nick, mnome, upnivel, moad, nota, exp, expneeded, icoperfil, tiqueroleta, datainicio, rodadas, totalrodadas, anuncio, fase, tiquepuloduplo, tique2xmoedas, tique6xmoedas, tiquebaubonus, ganhobaubonus, skins, dskins, premio, dadosevento, gamejolt FROM fzdsn WHERE loginreqkey='$req'";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($gusername, $gidpublico, $gstate, $grank, $gnivel, $gnick, $gmnome, $gupnivel, $gmoad, $gnota, $gexp, $gexpn, $gicoperfil, $gtiqueroleta, $datainicio, $grodadas, $gtotalrodadas, $ganuncio, $gfase, $gtiquepuloduplo, $gtique2xmoedas, $gtique6xmoedas, $gtiquebaubonus, $gganhobaubonus, $gskins, $gdskins, $gpremio, $gdadosevento, $ggamejolt);
    while ($stmt->fetch()) {
     echo "{";
	 echo '"state": "' . $gstate . '",';
        echo '"username": "' . $gusername . '",';
        echo '"idpublico": "' . $gidpublico . '",';
        echo '"rank": "' . $grank . '",';
        echo '"nivel": "' . $gnivel . '",';
		echo '"nick": "' . $gnick . '",';
		echo '"mnome": "' . $gmnome . '",';
		echo '"upnivel": "' . $gupnivel . '",';
		echo '"moad": "' . $gmoad . '",';
		echo '"nota": "' . $gnota . '",';
        echo '"exp": "' . $gexp . '",';
        echo '"expneeded": "' . $gexpn . '",';
        echo '"icoperfil": "' . $gicoperfil . '",';
		echo '"datainicio": "' . $gdatainicio . '",';
        echo '"tiqueroleta": "' . $gtiqueroleta . '",';
		echo '"rodadas": "' . $grodadas . '",';
		echo '"totalrodadas": "' . $gtotalrodadas . '",';
		echo '"pulos": "' . $gpulos . '",';
		echo '"anuncio": "' . $ganuncio . '",';
		echo '"fase": "' . $gfase . '",';
		echo '"tiquepuloduplo": "' . $gtiquepuloduplo . '",';
		echo '"tique2xmoedas": "' . $gtique2xmoedas . '",';
		echo '"tique6xmoedas": "' . $gtique6xmoedas . '",';
		echo '"tiquebaubonus": "' . $gtiquebaubonus . '",';
		echo '"ganhobaubonus": "' . $gganhobaubonus . '",';
		echo '"skins": "' . $gskins . '",';
		echo '"dskins": "' . $gdskins . '",';
		echo '"premio": "' . $gpremio . '",';
		echo '"dadosevento": "' . $gdadosevento . '",';
		echo '"gamejolt": "' . $ggamejolt . '"';
        echo "}";
    }
	

    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();

}


//////////////////////////////////////////////////////
//////////////////GET BASICSTATES/////////////////////

if($_GET["func"]=="info_basic"){
//connection to api
$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$req = $_GET["req"];



$query = "SELECT username, nivel, idpublico, status, moad, nota FROM fzdsn WHERE idpublico='$req'";

if ($stmt = $mysqli->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($gusername, $gnivel, $gidpublico, $gstate, $gmoad, $gnota);
    while ($stmt->fetch()) {
     echo "{";
	 echo '"state": "' . $gstate . '",';
	 echo '"nivel": "' . $gnivel . '",';
	 echo '"moad": "' . $gmoad . '",';
	 echo '"nota": "' . $gnota . '",';
	echo '"idpublico": "' . $gidpublico . '"';
    echo "}";
    }

    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();

}

///////////////////////////////////////////////////////
///////////////UPDATE ONLINE STATUS///////////////////

if($_GET["func"]=="u_result"){
    
$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$dados = $_GET["dados"];
$result = $_GET["$dados"];
$req = $_GET["req"];
    
$sql = "UPDATE fzdsn SET $dados='$result' WHERE loginreqkey='$req'";

if ($conn->query($sql) === TRUE) {
    die("successfully");
} else {
    echo "error" . $conn->error;
}

$conn->close();
}




?>
