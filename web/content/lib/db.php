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

class read extends db {

    public $query;
    public $result;
    public $rows;
    public $info;
    public $keys;
    public $array;

    public function values($column = NULL, $value = NULL) {

        if ($column != NULL && $value != NULL) {
            $this->query = "SELECT * FROM `" . $this->table . "` WHERE `" . $column . "` = '" . $value . "'";
        } else {
            $this->query = "SELECT * FROM `" . $this->table . "`";
        }
        $this->result = mysqli_query($this->connect, $this->query);

        while ($this->rows = mysqli_fetch_array($this->result)) {
            $this->array[] = $this->rows;
        }
        return $this->array;
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
        var_dump($this->query);
    }

}

class update extends db {

    public function values($array) {

        $r_table = new read($this->database, $this->table);
        $rows = $r_table->values();

        $this->query = "INSERT INTO `" . $this->table . "`(`id`, `value`) VALUES ([value-1],[value-2])";
    }

}

class delete extends db {

    public $id;

    public function values($id) {

        $this->query = "DELETE FROM " . $this->table . " WHERE `id` = " . $id;

        $this->result = mysqli_query($this->connect, $this->query);
    }

}

?>