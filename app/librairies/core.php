<?php
/*
 * App core class
 * Crée les URL & charge le core controlleur
 * la class Core nous permettra d'utiliser ce format D'URL ../Controller/method/parametre
 */
class Core {
    //Format d'url : Project3/Controller
    Protected $currentController = 'Pages';
    //Format d'url : Project3/Controller/Method
    protected $currentMethod = 'index';
    //Format d'url : Project3/Controller/Method/param
    protected $params = [];

    public function __construct(){
        print_r($this->getUrl());
    }

    //Test si un paramétre existe dans l'url et filtrer l'url des espaces blanc,et suppresion des caractéres spéciaux
    //Et factoriser l'url dans un array sans l'utilisation des '/'
    public function getUrl(){
        //echo $_GET['url'];
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //Coupe l'url et retourne un tableau ordonnées séparée par '/'
            $url = explode('/',$url);
            return $url;
        }
    }

} 