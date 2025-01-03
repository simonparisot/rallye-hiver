<?php

// on vérifie que la bdd est bien initialisée (sinon cela signifie que l'on appelle en ajax)
if (!isset($bdd)) {
	require_once '../ressources/info.php';
	require_once '../controllers/db.php';
	require_once '../controllers/login.php';
}

// on récupére la liste du contenu résolu par l'équipe
$visites = 0; $enigmes = 0;
foreach ($_SESSION['unlocked'] as $code => $solved) {
	if ($solved) {
		$code[0]=="P"? $visites++ : $enigmes++;
	}
}

if ($visites+$enigmes == 0) {
	echo "<div class=\"bienvenue\">Bienvenue sur le site du Rallye d'Hiver</div>";
}else{
	echo "<div class=\"stats\">Vous avez résolu $enigmes énigme".($enigmes>1?"s":"").($visites>0?" et $visites parcours</div>":"</div>");
}

?>

<div class="inside-box">
	<span>Quelques liens utiles</span>
	<a href="content/RH2023 - Règlement.pdf">
		<div class="file">
			<i class="fas fa-book"></i>
			Les règles du jeu
		</div>
	</a>
	<a href="?disconnect">
		<div class="file">
			<i class="fas fa-power-off"></i>
			Se déconnecter 
		</div>
	</a>
</div>

<div class="inside-box commentaires">
	<form>
		<textarea class="textbox" placeholder="Un avis sur les énigmes résolues ? Des idées d'améliorations ?"></textarea>
		<input type="submit" value="Écrire aux organisateurs" class="btn">
	</form>
</div>