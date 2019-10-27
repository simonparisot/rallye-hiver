<?php
require_once 'ressources/info.php';
require_once 'controllers/db.php';
require_once 'controllers/login.php';
?>

<!DOCTYPE html>
<html>

<head>

	<title>Orga | RH2019</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height,  initial-scale=1.0"/>

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="theme-color" content="#ffffff">

	<link type="text/css" rel="stylesheet" href="ressources/style.css?<?= filemtime('ressources/style.css'); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<script src="ressources/jquery-1.11.2.min.js"></script>
	<script src="controllers/client_controller.js?<?= filemtime('controllers/client_controller.js'); ?>"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-62904031-1', 'auto');
		ga('send', 'pageview');
	</script>

</head>

<body>

	<img id="logo" src="ressources/img/logo.png" />

	<div class="content">
		
		<?php

		if($auth) {
			if (!$_SESSION['admin']) {
				// User is authentified but not admin
				header('Location: http://rallyehiver.fr/');
				exit();
			}else{
				// User is authentified as admin
				include 'views/admin-page-template.php';
			}
		}else{ 
			// User is not authentified
			echo '<form id="authform" action="?" method="post">';
			include 'views/loginform.php';
			echo '</form>';
		}

		?>

	</div>

</body>
</html>