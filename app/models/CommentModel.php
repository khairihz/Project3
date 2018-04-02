<?php


class CommentModel{
    private $db;
    public function __construct(){
        //instancier la base des données
        $this->db = new Database;
    }
    public function getComments($id){

        $this->db->query('SELECT *,id, post_id, author, comment, DATE_FORMAT(comment_date,\'%d/%m/%Y à %Hh%imin%ss\') AS
    comment_date_fr FROM comments WHERE post_id = :id ORDER BY comment_date DESC');

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

    public function addComment($data)
    {
        $this->db->query ("INSERT INTO comments(author, comment, comment_date) VALUES(:post_id,:author,:comment, NOW())
                            WHERE comments.post_id = {$id}");
        //Récupération en paramètres les informations dont on a besoin
        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':post_id', $data['post_id']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':comment', $data['comment']);
        $this->db->bind(':comment_date', $data['comment_date']);

        //Execute
        if($this->db->execute()){
            return true ;
        }else {
            return false ;
        }
        }
    public function report($data){
        $this->db->query('UPDATE comments SET report = :report +1 WHERE id = :id');
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':report', $data['report']);

        //Execute
        if($this->db->execute()){
            return true ;
        }else {
            return false ;
        }
        
        }
    }

