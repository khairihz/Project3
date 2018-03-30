<?php

    class Posts extends Controller {
        public function __construct(){
            $this->postModel = $this->model('Post');
            $this->commentsModel =$this->model('Comments');
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
            $comments = $this->commentsModel->getComments($id);
            $data =[
                'post'=> $post,
                'comments'=>$comments
            ];
            $this->view('posts/show', $data);

            }
        }
    