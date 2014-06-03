<?php

require_once'db.class';

$db = new db();

$db->connect();
$db->select_db();

class functions {

    function login($username, $password) {
        
        $query = "select users_username, users_password 
                  from users 
                  where users_username = '$username'
                  and users_password = '$password';";

        $result = mysql_query($query) or die(mysql_error());

        if (mysql_num_rows($result) == '1') {

            while ($row = mysql_fetch_assoc($result)) {
                $username = $row['users_username'];
                $password = $row['users_password'];
                return $username;
            }
            
        } else {
            define("ERROR_MSG", "No users");
            return ERROR_MSG;
        }
    }

}

?>
