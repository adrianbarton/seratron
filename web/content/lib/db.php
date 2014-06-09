<?php

include "constants.php";

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
            $this->password = 'seratron1989!';
        } else {

            $this->server = 'localhost';
            $this->username = 'root';
            $this->password = '';
        }
        $this->connect = mysqli_connect($this->server, $this->username, $this->password);

        if (!$this->connect) {
            exit('Error: could not establish database connection');
        }
        $this->database = mysql_real_escape_string($database);
        $this->table = mysql_real_escape_string($table);

        $this->selected = mysqli_select_db($this->connect, $this->database);
        if (!$this->selected) {
            echo mysql_error();
        } else {
            
        }
    }

}

class read extends db {

    public $query;
    public $result;
    public $rows;
    public $info;
    public $keys;
    public $array;
    public $column;
    public $values;

    public function values($column = NULL) {

        foreach ($column as $column => $key) {

            $this->column = mysql_real_escape_string($column);
            $this->values = mysql_real_escape_string($key);

            $array[] = "`" . $this->column . "` = '" . $this->values . "'";
        }

        $string = implode(' AND ', $array);

        if ($column != NULL) {
            $this->query = "SELECT * FROM `" . $this->table . "` WHERE " . $string;
        } else {
            $this->query = "SELECT * FROM `" . $this->table . "`";
        }
        $this->result = mysqli_query($this->connect, $this->query);

        if ($this->result === false) {
            echo mysql_error();
        } else {
            while ($this->rows = mysqli_fetch_array($this->result)) {
                $this->array[] = $this->rows;
            }
            return $this->array;
        }
    }
}

class insert extends db {

    public $query;
    public $keys;
    public $result;
    public $values;

    public function values($array) {

        foreach ($array as $key => $value) {
            $this->keys[$key] = "'" . mysql_real_escape_string($key) . "'";
            $this->values[$value] = "'" . mysql_real_escape_string($value) . "'";
        }
        $this->query = "INSERT INTO `" . $this->table . "`(" . implode(',', array_keys($this->keys)) . ") VALUES (" . implode(',', array_values($this->values)) . ")";
        $this->result = mysqli_query($this->connect, $this->query);
        
        if($this->query != NULL){
            return true;
        }else{
            return false;
        }
        }
}

class update extends db {

    public function values($id, $array) {

        foreach ($array as $key => $value) {

            $this->keys = mysql_real_escape_string($key);
            $this->value = mysql_real_escape_string($value);

            $this->array[] = $this->keys . ' = "' . $this->value . '"';
        }

        $this->string = implode(', ', $this->array);

        $this->query = "UPDATE  `" . $this->table . "` SET " . $this->string . " WHERE id = " . mysql_real_escape_string($id);

        $this->result = mysqli_query($this->connect, $this->query);
    }

}

class delete extends db {

    public $id;

    public function values($id) {

        $this->query = "DELETE FROM " . $this->table . " WHERE `id` = " . mysql_real_escape_string($id);

        $this->result = mysqli_query($this->connect, $this->query);
    }

}

?>