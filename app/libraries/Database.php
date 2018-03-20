<?php
/*
 * Class base de données PDO
 * Connexion à la base de données
 * Liaison des valeurs
 * Renvoyer les lignes et les résultas
 */

 class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh; // géstionnaire de base de donnéess
    private $stmt; //déclaration
    private $error; // propriétés des erreurs

    public function __construct(){
        //Connecion à la base de données
        $dsn = 'mysql:host='.$this->host.';dbname='. $this->dbname;
        $options =  array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //créer une instance PDO
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options)
            ;
        }catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
        // Préparer les déclarations avec des requêtes 
        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
    
        }
    
        //Vérification de type de valeur : Int,bool,Strg ou null
        public function bind($param, $value , $type = null){
            if (is_null($type)) {
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
    
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
    
                    default:
                        $type = PDO::PARAM_STR;
    
                }
            }
    
            $this->stmt->bindValue($param, $value, $type);
        }
    
        // Executé la déclaration préparée
        public function execute(){
            return $this->stmt->execute();
        }
    
        //Avoir les résultats sous forme de tableau d'objet
        public function resultSet(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }
    
        // récuperer l'enregistrement unique en tant qu'objet
        public function single(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
        // Obtenir le nombre de lignes
        public function rowCount(){
            return $this->stmt->rowCount();
        }
 }