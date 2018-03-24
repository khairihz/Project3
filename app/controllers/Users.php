<?php
    
    class Users extends Controller{
        public function __construct(){
            $this->userModel = $this->model('User');
        }

        public function login(){
            //Vérifier le post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //processus de formulaire
                //1-filtrer les variables
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
                //instancier le data
                $data = [
                    'email'=> trim($_POST['email']),
                    'password'=>trim($_POST['password']),
                    'email_err'=>'',
                    'password_err'=>''

                ];
                //validation d'email
                if(empty($data['email'])){
                    $data['email_err'] ='Veuillez remplir le champ Email';
                }
                //validation mot de pass
                if(empty($data['password'])){
                    $data['password_err'] ='Veuillez insérer votre mot de passe';
                }
                //vérification d'admin/email
                if($this->userModel->findUserByemail($data['email'])){
                    //Administrateur trouvé
                }else{
                    //utilisateur non trouvé 
                    $data['email_err'] = 'Aucun administrateur n\'a été trouvé';
                }
                // s'assurer que les erreurs sont vides 
                if(empty($data['email_err']) && empty($data['password_err'])){
                    // Validation
                    //die('accés valider');
                    // vérifier et définir l'utilisateur connecté
                    $loggedInuser = $this->userModel->login($data['email'], $data['password']);

                    
                    //Script quand on est loggé
                    if($loggedInuser){
                        //create Session
                        $this->createUserSession($loggedInuser);
                    }else{
                        $data['password_err'] = 'Password incorrect';
                        $this->view('users/login', $data);
                    }
                    }else{
                        //charger la view avec des erreurs
                        $this->view('users/login', $data);
                    }
                }
                    else{
                        // init data
                    $data =[
                            'email' => '',
                            'password' =>'',
                            'email_err' =>'',
                            'password_err' => ''
                            ];

                        //load view
                        $this->view('users/login', $data);
                         }
                        }

                    public function createUserSession($user){
                        $_SESSION['user_id'] = $user->id;
                        $_SESSION['user_email'] = $user->email;
                        $_SESSION['user_name'] = $user->name;

                        redirect('admin/index');
                        }

                    public function logout(){
                    unset($_SESSION['user_id']);
                    unset($_SESSION['user_email']);
                    unset($_SESSION['user_name']);
                    session_destroy();
                    redirect('users/login');
                        }


                }
    