<?php

require_once "constants.php";

class db {

    private $server;
    private $username;
    private $password;
    private $database;
    public $connect;
    public $table;

    function __construct($database, $table) {

        if (URL == "seratron.co.uk") {

            $this->server = 'cust-mysql-123-19';
            $this->username = 'seratron';
            $this->password = '1989password!';
        } else {

            $this->server = 'localhost';
            $this->username = 'root';
            $this->password = '';
        }
        $this->connect = mysql_connect($this->server, $this->username, $this->password);

        if (!$this->connect) {
            exit('Error: could not establish database connection');
        }

        $this->database = $database;
        if (!mysql_select_db($this->database)) {
            exit('Error: could not select the database');
        } else {
            return TRUE;
        }
    }

}

class readtable extends db {
    
    public $query;
    

    public function values($id, $value) {

        $this->query = mysqli_query($this->connect, "SELECT * FROM '" . $this->table . "' WHERE '" . $id . "='" . $value . "'");

        
    }

}

?>
