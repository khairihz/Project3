<?php
/*
 *Définir L'approot comme une constante , pour avoir accés à la racine d'app sans avoir à réécrire à chaque
 le chemin de dossier
 *Définir L'urlroot en constante pour n'est pas changé L'url root dans chaque fichiers , à chaque qu'on change le nom de domaine
 *Définir les paramétres de la base de donnnées en constante
 */

define('DB_HOST','localhost');
define('DB_USER', 'root');
define('DB_PASS','');
define('DB_NAME','project3');
    

define('APPROOT', dirname(dirname(__FILE__))); //Renvoie le chemin de dossier parent
define('URLROOT', 'http://localhost/project3');
define('SITENAME','Blog Jean Forteroche');
define('APPVERSION','2.0.0');