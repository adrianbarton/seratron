<?php

require_once "constants.php";

class db {
    
    private $server;
    private $username;
    private $password;
    private $database;
    private $table;
    
    
    
    function __construct($database){
        
        if(URL == "seratron.co.uk"){
        
        $this->server = 'cust-mysql-123-19';
        $this->username = 'seratron';
        $this->password = '1989password!';
        $this->database;
        
        }else{
            
        $this->server = 'localhost';
        $this->username = 'root';
        $this->password = '!';
        $this->database;
       
        }
        
        
    }
    
    function connect(){
        if(!mysql_connect($this->server, $this->username, $this->password)){
            exit('Error: could not establish database connection');
        }
    }
    
    function select_db(){
        if(!mysql_select_db($this->database)){
            exit('Error: could not select the database');
        }
    }
      
    
}

?>
