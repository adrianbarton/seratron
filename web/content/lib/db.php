<?php

require_once "constants.php";

class db {

    public $server;
    public $username;
    public $password;
    public $database;
    public $connect;
    public $table;
    public $selected;

    public function __construct($database, $table) {

        if (URL == "seratron.co.uk") {

            $this->server = 'cust-mysql-123-19';
            $this->username = 'seratron';
            $this->password = '1989password!';
        } else {

            $this->server = 'localhost';
            $this->username = 'root';
            $this->password = '';
        }
        $this->connect = mysqli_connect($this->server, $this->username, $this->password);

        if (!$this->connect) {
            exit('Error: could not establish database connection');
        }
        $this->database = $database;
        $this->table = $table;

        $this->selected = mysqli_select_db($this->connect, $this->database);
        if (!$this->selected) {
            echo mysql_error();
        } else {
            
        }
    }
}
class readtable extends db {

    public $query;
    public $result;

    public function values($id, $value) {

        $this->query = "SELECT * FROM `" . $this->table . "` WHERE `" . $id . "` = '" . $value . "'";
        $result = mysqli_query($this->connect, $this->query);
        while ($row = mysqli_fetch_array($result)) {
            return $row;
        }
    }
}
?>