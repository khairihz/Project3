<?php

    class Posts extends Controller {
        public function __construct(){
            $this->postModel = $this->model('Post');
            $this->commentModelModel =$this->model('CommentModel');
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
            $comments = $this->commentModelModel->getComments($id);
            $data =[
                'id' => $id,
                'post'=> $post,
                'comments'=>$comments,
                'post_id' => $_SESSION['post_id']
            ];
            $this->view('posts/show', $data);

            }
}
