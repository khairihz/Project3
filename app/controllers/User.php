<?php
    class User extends Controller{
        public function __construct(){

        }

        public function login(){
            $this->view('user/login',['title'=>'Titre','description'=>'description']);

        }
    }