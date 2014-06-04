<?php

require_once "constants.php";

class db {
    
    private $server;
    private $username;
    private $password;    
    
    
    function __construct(){
        
        if(URL == "seratron.co.uk"){
        
        $this->server = 'cust-mysql-123-19';
        $this->username = 'seratron';
        $this->password = '1989password!';
   
        
        }else{
            
        $this->server = 'localhost';
        $this->username = 'root';
        $this->password = '';
               
        }
        
        if(!mysql_connect($this->server, $this->username, $this->password)){
            exit('Error: could not establish database connection');
        }
        
        
    }
  
    function select_db($database){
        if(!mysql_select_db($database)){
            exit('Error: could not select the database');
        }else{
            return TRUE;
        }
    }
      
    
}

?>
