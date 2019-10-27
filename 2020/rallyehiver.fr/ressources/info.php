<?php

$questList = array (
	"gkehb0p5av" => "Passages",
	"c12m85wqby" => "A la croisée des Jeux",
	"7xp2fvpuc7" => "Chair de Poule Souterraine",
	"62ygx5pcd3" => "Le Parcours dans le Temps",
    "q6ktqn8nf4" => "Guerre et Pions",
	"rakl26jbe9" => "Jeu d'échappatoire", // attention si on modifie le nom de ce parcours ici, il faut changer également dans verify.php
	"9nejv8fggv" => "Faux et usages de faux",
    "8mdiu77eah" => "Street Piction'Art",
);

$enigmeList = array (
    //    NOM DE L'ENIGME                          STATUT DE PUBLICATION              SOLUTION                 
    array("Unolphabète",                           true,                              "inde"            ),    
    array("Les 7 familles en or",                  true,                              "jeudesmilleeuros"),    
    array("Pandémie",                              true,                              "magellan"        ),        
    array("Le journal intime de Parker",           true,                              "couillon"        ),    
    array("Société",                               true,                              "millebornes"     ),         
    array("Gam3r",                                 true,                              "simcity"         ),
    array("Carte au Trésor",                       true,                              "bahamas"         ),    
    array("Bingo Dingo",                           true,                              "jeudepaume"      ),    
    array("Soirée au club de jeu",                 true,                              "risk"            ),
    array("Jeu de trônes",                         true,                              "cachecache"      ),        
    array("La liste du Toubib Soncarré",           true,                              "scorpion"        ),    
    array("Labyrinthe",                            true,                              "eau"             ),
    array("Chassé-Croisé",                         true,                              "octobrerouge"    ),       
    array("Morgan, je présume",                    true,                              "garemontparnasse"),    
    array("Jeu d'acteurs",                         true,                              "paulnewman"      ),    
    array("LE-GOLISATION !",                       true,                              "barbu"           ),
    array("De Fil en Aiguille",                    true,                              "rami"            ),
    array("Une bonne occasion",                    false,                             "jackpot"         ),
    array("Petites Annonces",                      false,                             "marseille"       ), 
    array("La théorie des jeux",                   false,                             "xxx"             ),       
    array("Enigme Mystère",                        false,                             "lemaillonfaible" ),            
);

// liste des réponses pré-enregistrées pour certains mauvais mots de passe
$mauvais_mdp = array (
    "faux"              => array(false,     "Non, et en même temps vous auriez pu vous en douter..."),
    "mauvaisereponse"   => array(false,     "Non, et en même temps vous auriez pu vous en douter..."),
    "bonnereponse"      => array(false,     "Hum... comment dire. Ça valait le coup d'essayer c'est sûr !"),
    "jeu"               => array(false,     "Oui ça c'est le thème. Mais ça n'est pas ce qu'on vous demande !"),
    "lesjeux"           => array(false,     "Oui ça c'est le thème. Mais ça n'est pas ce qu'on vous demande !"),
    "reponse"           => array(false,     "Oui vous avez compris... c'est là qu'il faut mettre la réponse. Et maintenant au boulot !"),
    "bouton"            => array(false,     "Heu... c'était juste un exemple. Résolvez les vrais énigmes maintenant !"),
    "uno"               => array(1,         "Haha, ça serait un peu simple non ?"),
    "lejeudesmillefrancs"=> array(2,        "Donnez son nom actuel !"),
    "jeudesmillefrancs" => array(2,         "Donnez son nom actuel !"),
    "jeudes1000francs"  => array(2,         "Donnez son nom actuel !"),
    "lejeudes1000euros" => array(2,         "Tout en lettres s'il vous plait ;)"),
    "jeudes1000euros"   => array(2,         "Tout en lettres s'il vous plait ;)"),
    "lejeudesmilleeuros"=> array(2,         "Allez, enlevez le déterminant au début et je vous l'accorde :)"),
    "konami"            => array(6,         "Et si vous essayiez de résoudre l'énigme ?"),
    "mario"             => array(6,         "Un peu facile non ?"),
    "tetris"            => array(6,         "Un peu facile non ?"),
    "pacman"            => array(6,         "Un peu facile non ?"),
    "frogger"           => array(6,         "Un peu facile non ?"),
    "space invader"     => array(6,         "Un peu facile non ?"),
    "jeuvideo"          => array(6,         "C'est une énigme, pas une devinette !"),
    "bananas"           => array(7,         "Ba ba ba, ba bananas"),
    "rosedesvents"      => array(7,         "Autant essayer dans le doute…"),
    "paume"             => array(8,         "Mais non, vous n'êtes pas paumé ! Vous y êtes presque !"),
    "tarot"             => array(8,         "Vous êtes dans le thème…"),
    "jeudetarot"        => array(8,         "Vous êtes dans le thème…"),
    "tarotnouveau"      => array(8,         "Vous êtes dans le thème…"),
    "atout"             => array(8,         "Vous êtes dans le thème…"),
    "atouts"            => array(8,         "Vous êtes dans le thème…"),
    "fachecafce"        => array(10,        "C’est un mot, ça ? Une petite révision des règles et à vous la solution…"),
    "jemelaisseprendreacejeufutile"=> array(12,"Oui, et alors, on la commence cette partie ?"),
    "element"           => array(12,        "Vous y êtes presque !"),
    "elements"          => array(12,        "Vous y êtes presque !"),
    "10"                => array(13,        "Oui... Mais non."),
    "io"                => array(13,        "Désolé, mais quel est le rapport avec la mythologie ?"),
    "markoramius"       => array(13,        "Sean Connery est très bon mais le raisonnement va trop loin."),
    "ramius"            => array(13,        "Sean Connery est très bon mais le raisonnement va trop loin."),
    "marko"             => array(13,        "Sean Connery est très bon mais le raisonnement va trop loin."),
    "ouest"             => array(14,        "Vous n'y êtes pas du tout ! Ou peut-être que si ?"),
    "w"                 => array(14,        "Lettre compte 10"),
    "richelieu"         => array(14,        "Bon, plus que 227 cardinaux pour pouvoir élire un pape…"),
    "mazarin"           => array(14,        "Bon, plus que 227 cardinaux pour pouvoir élire un pape…"),
    "casedepart"        => array(14,        "Film de 2010 avec Fabrice Éboué et Thomas N'Gijol, mais aucun rapport"),
    "montparnasse"      => array(14,        "Vous y êtes presque !"),
    "paul"              => array(15,        "Quel est son nom complet ?"),
    "newman"            => array(15,        "Quel est son nom complet ?"),
    "arnaque"           => array(15,        "Vous chauffez… Et le gagnant est… ?"),
    "larnaque"          => array(15,        "Vous chauffez… Et le gagnant est… ?"),
    "sting"             => array(15,        "Vous chauffez… Et le gagnant est… ?"),
    "thesting"          => array(15,        "Vous chauffez… Et le gagnant est… ?"),
    "henrygondorff"     => array(15,        "Vous chauffez… Et le gagnant est… ?"),
    "gondorff"          => array(15,        "Vous chauffez… Et le gagnant est… ?"),
    "roidecoeur"        => array(16,        "Non... mais vous y êtes presque !"),
    "notice"            => array(16,        "Effectivement, mais vous n’êtes pas encore à la solution ! Cherchez bien !"),
    "perdulanotice"     => array(16,        "Effectivement, mais vous n’êtes pas encore à la solution ! Cherchez bien !"),
    "jaiperdulanotice"  => array(16,        "Effectivement, mais vous n’êtes pas encore à la solution ! Cherchez bien !"),
    "leboncoin"         => array(18,        "Un bon début !"),
    "trivialpursuit"    => array(18,        "C'est une énigme, pas une devinette !"),
    "tarotdemarseille"  => array(19,        "Juste la ville !"),
    "tarotmarseille"    => array(19,        "Juste la ville !"),
    "tarot"             => array(19,        "Relisez la question ..."),
); 

// liste des réponses toutes faites pour les mauvais mots de passe qui ne sont pas ci-dessus
$wrong = array (
    "Désolé, ce n'est pas la bonne réponse :(",
    "Oups, raté !",    
    "Sacrée imagination... mais ce n'est pas ça.",    
    "Raté, mais continuez de chercher !",        
    "Non... essayez autre chose ?",    
    "Non, je ne pense pas.",       
);

?>