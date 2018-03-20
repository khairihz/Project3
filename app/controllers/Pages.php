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

                    'description'=>'Brief présentation de l\'auteur',

                    'about'=>'Jean Forteroche est né en 1991 sur en Alaska, 
                    et y a passé une partie de son enfance avant de s\'installer 
                    en France avec sa mère et sa sœur. Il a rédigé son premier roman 
                    les mésirables lors d\'un voyage en mer. Après avoir parcouru plus de 40 000
                    milles sur les océans, il échoue lors de sa tentative de tour du monde en 
                    solitaire sur un trimaran qu\'il a dessiné et construit lui-même. En 2013, il 
                    publie le récit de son propre naufrage dans les Caraïbes lors de son voyage de 
                    noces quelques années plus tôt. Ce livre fait partie de la liste des best-sellers du 
                    Figaro. Publié en France en janvier 2010, les naufrage remporte immédiatement un immense 
                    succès. Il remporte le prix Médicis et s\'est vendu à plus de 300 000 exemplaires. Porté par 
                    son succès, Jean Forteroche est aujourd\'hui traduit en dix-huit langues dans plus de 
                    soixante pays. Une adaptation cinématographique par une société de production française est 
                    en cours. En 2017, il décide de publier en ligne chapitre par chapitre sur son propre site, son 
                    dernier roman billet simple POUR L\'Alaska.'];
                    
            $this->view('pages/about',$data);
        }
    }
