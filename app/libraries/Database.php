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
 }