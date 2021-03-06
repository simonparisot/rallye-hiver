<?php

// Direct and Ajax controller
// -----------------

// routine d'authentification à chaque appel de page
// -----------------

ini_set('session.gc_maxlifetime', 7200);
session_start();
error_log("sessions start/n");
$auth = false; // variable globale utilisée pour savoir si l'utilisateur est authentifié


// l'utilisateur a-t-il demandé une déconnexion ?
if( isset($_GET['disconnect']) ) {

	error_log("disconnected/n");
	setcookie('auth', "", -1, '/', '' , false);
	session_destroy();
	header('location: '.$_SERVER['PHP_SELF']);
	exit;


// si non, y a-t-il une session en cours pour un utilisateur loggé ?
}elseif( isset($_SESSION['nom']) ) {

	error_log("already connected/n");
	$auth = true;


// si non, l'utilisateur a-t-il soumis le formulaire de connexion ?
}elseif( isset($_POST['login']) && isset($_POST['pwd']) ) {

	error_log("logging in/n");
	sleep(3);
	$loginfailed = "Nom d'équipe ou mot de passe incorrect";
	$sth = $bdd->prepare('SELECT * FROM rallye_people WHERE login = :login LIMIT 1');
	if ($sth->execute(array(':login' => $_POST['login']))) {
		$user = $sth->fetchAll();
		if( count($user) > 0 ) {
			if ( password_verify($_POST['pwd'], $user[0]['pwd']) ){
				error_log("user is succesfully logged in/n");
				$_SESSION['login'] = $user[0]['login'];
				$_SESSION['nom'] = $user[0]['nom'];
				$_SESSION['admin'] = ($user[0]['login'] == 'orga');
				$auth = true;
				$loginfailed = false;
				setPersistentLogin($_POST['login']);

    			// log bdd
    			$sth = $bdd->prepare('INSERT INTO rallye_log (ip, equipe, log) VALUES (:ip, :equipe, :log)');
				$sth->execute(array(':ip' => $_SERVER["REMOTE_ADDR"], ':equipe' => $_SESSION['nom'], ':log' => 'Form login'));
			}
		}
	}


// si non, y a-t-il un cookie d'authentification persistente ?
}elseif( isset($_COOKIE['auth']) ) {

	error_log("persistent auth cookie detected/n");
	$token = $_COOKIE['auth'];
	$sth = $bdd->prepare('SELECT * FROM rallye_people WHERE token LIKE :token LIMIT 1');
	if ($sth->execute(array(':token' => "%$token%"))) {
		$user = $sth->fetchAll();
		if( count($user) > 0 ) {

			$tokenList = json_decode($user[0]['token'], true);
			if ($tokenList[$token] > time()) {
				
				error_log("valid persistent cookie, user is logged in/n");
				$_SESSION['login'] = $user[0]['login'];
				$_SESSION['nom'] = $user[0]['nom'];
				$_SESSION['admin'] = ($user[0]['login'] == 'orga');
				$auth = true;

    			// log bdd
    			$sth = $bdd->prepare('INSERT INTO rallye_log (ip, equipe, log) VALUES (:ip, :equipe, :log)');
				$sth->execute(array(':ip' => $_SERVER["REMOTE_ADDR"], ':equipe' => $_SESSION['nom'], ':log' => 'Token login'));

			}else{
				unset($tokenList[$token]);
			}

		}
	}
}

function setPersistentLogin($login)
{
	$lifetime = 60*60*24*30;
	$token = bin2hex(openssl_random_pseudo_bytes(20));

	global $bdd;
	$gettokenlist = $bdd->prepare('SELECT token FROM rallye_people WHERE login = :login LIMIT 1');
	$storetoken = $bdd->prepare('UPDATE rallye_people SET token = :token WHERE login = :login');

	$gettokenlist->execute(array(':login' => $login));
	$result = $gettokenlist->fetchAll();
	if( count($result) > 0 ) {
		$tokenList = json_decode($result[0]['token'], true);
		$tokenList[$token] = time() + $lifetime;
		$storetoken->execute(array(':token' => json_encode($tokenList), ':login' => $login));	
		setcookie('auth', $token, time() + $lifetime, '/', '' , false);
	}
}

?>