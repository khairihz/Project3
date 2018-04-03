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
            $comments = $this->commentModelModel->getComments($id);
            $post = $this->postModel->getPostById($id);
            if($comments){
                $data =[
                    'id' => $id,
                    'post'=> $post,
                    'comments'=>$comments,
                    'post_id' => $_SESSION['post_id']
                ];
                $this->view('posts/show', $data);
            }
        }
    
    public function report($comment_id ,$post_id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->commentModelModel->report($comment_id)){
                $post = $this->postModel->getPostById($post_id);
                $data=['post_id'=>$post_id];
                flash('post_message','Commentaire signalé');
                header('location:'.URLROOT.'/posts/show/'.$data['post_id']);
            } else{
                die('Quelque chose a mal tourné');
            }
        }else{
            redirect('posts/show');
        }
    }

    }
    
    
 