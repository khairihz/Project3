<?php

class comment{
    private $db;
    public function __construct(){
        //instancier la base des données
        $this->db = new Database;
    }
    public function getComments($id){

        $this->db->query('SELECT id, author, comment, DATE_FORMAT(comment_date,\'%d/%m/%Y à %Hh%imin%ss\') AS
    comment_date_fr FROM comments WHERE id = :id ORDER BY comment_date DESC');

    $this->db->bind(':id',$id);
    $results = $this->db->resultSet();
    return $results;
    }

}
