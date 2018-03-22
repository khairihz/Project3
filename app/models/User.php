<?php

Class User {
    private $db;

    public function __construct(){
        $this->db =new Database;
    }

    //Connexion
    public function login($email, $password){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)){
            return $row;
        }else{
            return false;
        }
    }

    // Trouver l'utilisateur par e-mail :
    public function findUserByemail($email){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
    // Trouver l'utilisateur par  l'id

    public function getUserById($id){
        $this->db->query('SELECT * FROM users WHERE id= :id');
        // Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row; 
    }
}