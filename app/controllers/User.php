<?php
    class User extends Controller{
        public function __construct(){

        }

        public function login(){
            //Vérifier le post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //processus de formulaire
                //1-filtrer les variables
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            }else{
                //instancier le data
                $data = [
                    'email'=> trim($_POST['email']),
                    'password'=>trim($_POST['password']),
                    'email_err'=>'',
                    'password_err'=>''

                ];
            }
            //Charger la view
            $this->view('user/login', $data);

        }
    }