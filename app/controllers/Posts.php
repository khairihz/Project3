<?php

    class Posts extends Controller {
        public function __construct(){
            $this->postModel = $this->model('Post');
        }
        
        public function index(){
            // renvoyer les épisodes
            $posts = $this->postModel->getPosts();
            $data = [
                    'posts' => $posts
            ];
            $this->view('posts/index', $data);
        }
    }