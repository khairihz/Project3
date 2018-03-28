<?php

class comments{
    private $db;
    public function __construct(){
        //instancier la base des données
        $this->db = new Database;
    }
    public function getComments($id){

        $this->db->query('SELECT *,
        DATE_FORMAT(comment_date,\'%d/%m/%Y à %Hh%imin%ss\') AS
        c_date FROM comments WHERE id = :id');
        $this->db->bind(':id',$id);

        //method resultSet pour renvoyer plus qu'un résultat

        $results = $this->db->resultSet();

        return $results;
    }

}
