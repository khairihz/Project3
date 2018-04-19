<?php


class CommentModel{
    private $db;
    public function __construct(){
        //instancier la base des données
        $this->db = new Database;
    }
    public function getComments($id){

        $this->db->query('SELECT *,comment_id, post_id, author, comment, DATE_FORMAT(comment_date,\'%d/%m/%Y à %Hh%imin%ss\') AS
    comment_date_fr FROM comments WHERE post_id = :id ORDER BY comment_date_fr DESC');

    $this->db->bind(':id',$id);
    $results = $this->db->resultSet();
    return $results;
    }

    public function getCommentById($id){
        $this->db->query('SELECT * FROM comments WHERE id = :id');
        $this->db->bind(':id',$id);

        $row = $this->db->single();
        return $row;
    }
    public function adminComment(){
        $this->db->query('SELECT * FROM comments ORDER BY post_id DESC');
    
        $results = $this->db->resultSet();
        return $results;  
    }

    /*public function addComment($data)
    {
        $this->db->query ('INSERT INTO comments (comment_id,post_id, author, comment,comment_date) VALUES(:comment_id, :post_id, :author, :comment, :NOW())
        WHERE post_id = :post.id');
        //Récupération en paramètres les informations dont on a besoin
        // Bind Values
        $this->db->bind(':comment_id', $data['comment_id']);
        $this->db->bind(':post_id', $data['post_id']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':comment', $data['comment']);

        //Execute
        if($this->db->execute()){
            return true ;
        }else {
            return false ;
        }
        }*/

    public function save($insert) {
        // @todo Valider les données
        $this->db->query("INSERT INTO comments (comment_id,post_id, author, comment,comment_date) 
        VALUES(:comment_id, :post_id, :author, :comment , NOW())");
            $this->db->bind(':comment_id' , $insert['comment_id']);
            $this->db->bind(':post_id' , $insert['post_id']);
            $this->db->bind(':author' , $insert['author']);
            $this->db->bind(':comment' , $insert['comment']);

            if($this->db->execute()){
                return true ;
            }else {
                return false ;
            }
    }
    
    public function report($comment_id){
        $this->db->query('UPDATE comments SET report = 1 WHERE comment_id = :comment_id');
        $this->db->bind(':comment_id',$comment_id);

        //Execute
        if($this->db->execute()){
            return true ;
        }else {
            return false ;
        }
        
        }
        public function validate($comment_id){
            $this->db->query('UPDATE comments SET report = 0 WHERE comment_id = :comment_id');
            $this->db->bind(':comment_id',$comment_id);
    
            //Execute
            if($this->db->execute()){
                return true ;
            }else {
                return false ;
            }
            
            }
    public function adminReport(){
        $this->db->query('SELECT * FROM comments WHERE report = 1 ORDER BY post_id DESC');
        $results = $this->db->resultSet();
        return $results;
    }
    public function deleteComment($comment_id){
    $this->db->query('DELETE FROM  comments WHERE comment_id = :comment_id');
    // Bind Values
    $this->db->bind(':comment_id',$comment_id);

    //Execute
    if($this->db->execute()){
        return true ;
    }else {
        return false ;
    }
    }
}

