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

            public function addComments($id){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Assainir le tableau des articles
            $_POST = filter_input_array (INPUT_POST, FILTER_SANITIZE_STRING);
            $_SESSION['test'] = $_POST ;
            $data = [
            'post_id' => $id,
            'author' => trim($_POST['author']),
            'comment' => trim($_POST['comment']),
            'title_err' => '',
            'content_err' => '',
            'number_err' => ''
                    ];
            /*//valider le titre
            if(empty($data['author'])){
                $data['author_err'] = 'Veuillez entrer votre nom';
            }

            //valider le contenu
            if(empty($data['comment'])){
            $data['comment_err'] = 'Veuillez entrer votre commentaire';
            }*/

            //s'assurrer qu'il n'y a pas des erreurs
            //if(empty($data['author_err']) && empty($data['comment_err'])){
            //validation
            //($this->commentModelModel->addComment($data))
                flash('post_message','Commentaire ajouté');
                header('location'.URLROOT.'/posts/show/'.$id);
            /*else{
                die('une erreur se produite');
            }*/

            }/*else{
            // charger le view
            $this->view('posts/show', $data);

            }*/

            }/*else{
                $data = [
                'author' => '',
                'comment' => ''
                ];

            $this->view('posts/show', $data);

            }*/
    
    public function report($id ,$post_id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->commentModelModel->report($id)){
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
    