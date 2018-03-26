<?php
class Admin extends controller{
    public function __construct(){
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }
    public function index(){
            // renvoyer les épisodes
            $posts = $this->postModel->getPosts();
            $data = [
                    'admin' => $posts
            ];
            $this->view('admin/index',$data);
    }

    public function add(){
        if(!isLoggedIn()){
            redirect('users/login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Assainir le tableau des articles
            $_POST = filter_input_array (INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
            'title' => trim($_POST['title']),
            'content' => trim($_POST['content']),
            'user_id' => $_SESSION['user_id'],
            'title_err' => '',
            'content_err' => ''
            ];
            //valider le titre
            if(empty($data['title'])){
                $data['title_err'] = 'Veuillez entrer votre titre';
            }

            //valider le contenu
            if(empty($data['content'])){
            $data['content_err'] = 'Veuillez entrer le contenu du chapitre';
            }

            //s'assurrer qu'il n'y a pas des erreurs
            if(empty($data['title_err']) && empty($data['content_err'])){
            //validation
            if($this->postModel->addPost($data)){
                flash('post_message','Chapitre ajouté');
                redirect('admin');
            }else{
                die('une erreur se produite');
            }

            }else{
            // charger le view
            $this->view('admin/add', $data);

            }

            }else{
                $data = [
                'title' => '',
                'content' => ''
               ];

       $this->view('admin/add', $data);

            }
    }
}