<?php

    class Pages extends Controller {
        public function __construct(){
        }
        public function index(){
            $data =['title'=>'Billet simple pour l\'alaska',
            'description'=>'Vous trouverez dans ce blog toutes les épisodes de ce livre'
            ];
            $this->view('pages/index',$data);
        }
        
        public function about(){
            $data = ['title'=>'À propos de jean forteroche',
                    'description'=>'Brief présentation de l\'auteur'];
            $this->view('pages/about',$data);
        }
    }
