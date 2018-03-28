<?php
class Post{
    private $db;

    public function __construct(){
        //instancier la base des données
        $this->db = new Database;
    }

    public function getPosts(){
        $this->db->query('SELECT *,substring(content,1,190) AS sub_content ,
        DATE_FORMAT(created_at,\'%d/%m/%Y à %Hh%imin%ss\') AS
        c_date FROM posts ORDER BY number_e ASC');

        //method resultSet pour renvoyer plus qu'un résultat

        $results = $this->db->resultSet();

        return $results;
    }
    public function addPost($data){
        $this->db->query('INSERT INTO posts (title, user_id, content) VALUES(:title, :user_id , :content)');

        // Bind Values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':content', $data['content']);

        //Execute
        if($this->db->execute()){
            return true ;
        }else {
            return false ;
        }
        }
    public function updatePost($data){
        $this->db->query('UPDATE  posts SET title = :title, content = :content WHERE id = :id');
        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);

        //Execute
        if($this->db->execute()){
            return true ;
        }else {
            return false ;
        }
        }
    public function getPostById($id){
        $this->db->query('SELECT *,DATE_FORMAT(created_at,\'%d-%m-%Y à %Hh%imin%ss\') AS
        c_date FROM posts WHERE id = :id');
        $this->db->bind(':id',$id);

        $row = $this->db->single();
        return $row;
    }

    public function deletePost($id){

        $this->db->query('DELETE FROM  posts WHERE id = :id');
        // Bind Values
        $this->db->bind(':id',$id);

        //Execute
        if($this->db->execute()){
            return true ;
        }else {
            return false ;
        }
    }
}