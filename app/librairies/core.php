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
        //print_r($this->getUrl());

        $url = $this->getUrl();

        //Chercher la première valeur dans le controlleur
        if(file_exists('../app/controllers/' .ucwords($url[0]).'.php')){
        // Si la valeur exist , on la définit comme controlleur par défaut et le paramétre écrasera 'Pages'
        $this->currentController = ucwords($url[0]);
        // unset 0 index
        unset($url[0]);
        }

        //Exiger le controlleur
        require_once '../app/controllers/'.$this->currentController.'.php';

        //instantier la classe de controleur
        $this->currentController = new $this->currentController;
        // Exemple = $pages = new pages
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