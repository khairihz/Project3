<?php

//Session 
class Session {
//Objet base des données
    private $db;
    public function __construct(){  
        // Instantiate new Database object  
        $this->db = new Database;  
    // Set handler to overide SESSION  
    session_set_save_handler(  
        array($this, "_open"),  
        array($this, "_close"),  
        array($this, "_read"),  
        array($this, "_write"),  
        array($this, "_destroy"),  
        array($this, "_gc")  
        );  
    // Start the session  
    session_start();
    }

    //Checking for a database connection --!Open methods
    public function _open(){  
    // If successful  
    if($this->db){  
    // Return True  
    return true;  
    }  
    // Return False  
    return false;  
    } 

    //!Close methods
    public function _close(){  
    // Close the database connection  
    // If successful  
    if($this->db->close()){  
    // Return True  
    return true;  
    }  
    // Return False  
    return false;  
    }

    //read 
    public function _read($id){  
    // Set query  
    $this->db->query('SELECT id FROM sessions WHERE id = :id');
   
    // Bind the Id  
    $this->db->bind(':id', $id);
   
    // Attempt execution  
    // If successful  
    if($this->db->execute()){  
    // Save returned row  
    $row = $this->db->single();  
    // Return the data  
    return $row['id'];  
    }else{  
    // Return an empty string  
    return ”;  
    }  
    }

    //write

    public function _write($id, $data){  
    // Create time stamp  
    $access = time();
    
    // Set query  
    $this->db->query('REPLACE INTO comments VALUES (:id, :content, :data)');
    
    // Bind data  
    $this->db->bind(':id', $id);  
    $this->db->bind(':access', $access);  
    $this->db->bind(':data', $data);
    
    // Attempt Execution  
    // If successful  
    if($this->db->execute()){  
    // Return True  
    return true;  
    }
    
    // Return False  
    return false;  
    }  

    //Destroy    
    public function _destroy($id){  
    // Set query  
    $this->db->query('DELETE FROM sessions WHERE id = :id');
    
    // Bind data  
    $this->db->bind(':id', $id);
    
    // Attempt execution  
    // If successful  
    if($this->db->execute()){  
    // Return True  
    return true;  
    }
    
    // Return False  
    return false;  
    }

     //Garbage Collection
    public function _gc($max){  
    // Calculate what is to be deemed old  
    $old = time() - $max;
   
    // Set query  
    $this->db->query('DELETE * FROM sessions WHERE access < :old');
   
    // Bind data  
    $this->db->bind(':old', $old);
   
    // Attempt execution  
    if($this->db->execute()){  
    // Return True  
    return true;  
    }
   
    // Return False  
    return false;  
    }  
 
    
}  