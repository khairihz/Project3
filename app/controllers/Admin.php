<?php
class Admin extends controller{
    public function __construct(){
        $this->postModel = $this->model('Post');
        $this->commentModelModel = $this->model('CommentModel');
    }
    public function index(){
                if(!isLoggedIn()){
            redirect('users/login');
        }
            // renvoyer les épisodes
            $nb_comment = $this->postModel->NbComment();
            $posts = $this->postModel->getPosts();
            $nb_Report = $this->postModel->NbReport();
            $nb_Posts = $this->postModel->Nbposts();
            $data = [
                    'admin' => $posts,
                    'nbposts' => $nb_Posts,
                    'nbcomment' => $nb_comment,
                    'nbreport' => $nb_Report
            ];
            $this->view('admin/index',$data);
    }

    public function add(){
        if(!isLoggedIn()){
            redirect('users/login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Assainir le tableau des articles
            $_POST = filter_input_array (INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $data = [
            'title' => trim($_POST['title']),
            'content' => trim($_POST['content']),
            'user_id' => $_SESSION['user_id'],
            'number_e' => trim($_POST['number_e']),
            'title_err' => '',
            'content_err' => '',
            'number_err' => ''
                    ];
            //valider le titre
            if(empty($data['title'])){
                $data['title_err'] = 'Veuillez entrer votre titre';
            }

            //valider le contenu
            if(empty($data['content'])){
            $data['content_err'] = 'Veuillez entrer le contenu du chapitre';
            }
            if(empty($data['number_e'])){
                $data['number_err'] = 'Veuillez entrer un numéro d\'épisode';
            }

            //s'assurrer qu'il n'y a pas des erreurs
            if(empty($data['title_err']) && empty($data['content_err'] && empty($data['number_err']))){
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
                'content' => '',
                'number_e' => '',
               ];

            $this->view('admin/add', $data);

            }
    }
    public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!isLoggedIn()){
                redirect('users/login');
            }
            // Assainir le tableau des articles
            $_POST = filter_input_array (INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $data = [
            'id' => $id,
            'title' => trim($_POST['title']),
            'content' => trim($_POST['content']),
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
            if($this->postModel->updatePost($data)){
                flash('post_message','Chapitre modifié');
                redirect('admin');
            }else{
                die('une erreur se produite');
            }

            }else{
            // charger le view
            $this->view('admin/edit', $data);

            }

            }else{
            $post = $this->postModel->getPostById($id);
            if($post->user_id != $_SESSION['user_id']){
                redirect('users/login');
            }
            $data =[
            'id'=>$id,
            'title' => $post->title,
            'content' => $post->content
            ];

            $this->view('admin/edit', $data);
    }
}
        public function delete($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $post = $this->postModel->getPostById($id);

                if($this->postModel->deletePost($id)){
                    flash('post_message','Épisode supprimé');
                    redirect('admin');
                } else{
                    die('Quelque chose a mal tourné');
                }
            }else{
                redirect('admin');
            }
        }
        public function Comments(){
            if(!isLoggedIn()){
                redirect('users/login');
            }
                // renvoyer les épisodes
                $comments = $this->commentModelModel->adminComment();
                $nb_comment = $this->postModel->NbComment();
                $nb_Report = $this->postModel->NbReport();
                $nb_Posts = $this->postModel->Nbposts();
                $data = [
                        'comments' => $comments,
                        'nbposts' => $nb_Posts,
                        'nbcomment' => $nb_comment,
                        'nbreport' => $nb_Report
                ];
                $this->view('admin/comments',$data);

        }
        public function Report(){
            if(!isLoggedIn()){
                redirect('users/login');
            }
            $report_table = $this->commentModelModel->adminReport();
            $nb_comment = $this->postModel->NbComment();
            $nb_Report = $this->postModel->NbReport();
            $nb_Posts = $this->postModel->Nbposts();
            $data = [
                    'reports' => $report_table,
                    'nbposts' => $nb_Posts,
                    'nbcomment' => $nb_comment,
                    'nbreport' => $nb_Report
            ];
            $this->view('admin/report',$data);
        }
        public function CommentValidate($comment_id){
            //if($_SERVER['REQUEST_METHOD'] == 'POST')
                if($this->commentModelModel->validate($comment_id)){
                     flash('post_message','Commentaire validé');
                     redirect('admin/report');

            }else{
                die('Queleque chose a mal touné');
            }
        }
        public function Commentdelete($comment_id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                //$post = $this->postModel->getPostById($id);

                if($this->commentModelModel->deleteComment($comment_id)){
                    flash('post_message','commentaire supprimé');
                    redirect('admin/report');
                } else{
                    die('Quelque chose a mal tourné');
                }
            }else{
                redirect('admin');
            }
        }
}