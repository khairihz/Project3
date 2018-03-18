<?php
/*
 * App core class
 * Crée les URL & charge le core controlleur
 * la class Core nous permettra d'utiliser ce format D'URL ../Controller/method/parametre
 */
class Core {
    Protected $currentController = 'Home';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $this->getUrl();
    }
    //test si les paramétres de l'url fonctionne
    public function getUrl(){
        echo $_GET['url'];
    }

} 