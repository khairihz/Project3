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
        c_date FROM posts ORDER BY c_date ASC');

        //method resultSet pour renvoyer plus qu'un résultat

        $results = $this->db->resultSet();

        return $results;
    }
}