<?php
/* Controlleur de base 
 * Charge le model et la vue
 */
class Controller {
    //Charge le model
    //public function model($posts)
    public function model($model){
        // require model file
        Require_once '../app/models/'.$model.'.php';

        //instantier le model
        return new $model();
    }

    public function view($view, $data = []){
        //Vérifications sur l'existence de la vue 
        if (file_exists('../app/views/' .$view. '.php')){
            require_once '../app/views/' .$view. '.php';
        }else{
            die('La vue n\'existe pas' );
        }
    }
}