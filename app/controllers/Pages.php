<?php

    class Pages extends Controller {
        public function __construct(){
            $this->postModel = $this->model('Post');

        }
        public function index(){
            $post = $this->postModel->getPosts();
            $this->view('pages/index', ['title'=>'Jean Forteroche','posts'=> $post]);
        }
        
        public function about(){
            $this->view('pages/about',['title'=>'À propos de jean forteroche']);
        }
    }
