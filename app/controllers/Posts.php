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
        //
        public function show($id){
            $post = $this->postModel->getPostById($id);
            $data =[
                'post'=> $post
            ];

            $this->view('posts/show', $data);
        }
    }