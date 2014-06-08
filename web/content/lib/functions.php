<?php

$filepath = realpath(dirname(__FILE__));

require_once($filepath . "/db.php");

//$db = new db();
//
//$db->connect();
//$db->select_db();

class functions {

//    public $username;
//    private $password;
//
//    function login($username, $password) {
//        
//        $query = "select users_username, users_password 
//                  from users 
//                  where users_username = '$username'
//                  and users_password = '$password';";
//
//        $result = mysql_query($query) or die(mysql_error());
//
//        if (mysql_num_rows($result) == '1') {
//
//            while ($row = mysql_fetch_assoc($result)) {
//                $username = $row['users_username'];
//                $password = $row['users_password'];
//                return $username;
//            }
//            
//        } else {
//            define("ERROR_MSG", "No users");
//            return ERROR_MSG;
//        }
//    }



    function log_in($username, $password) {

        if ($username == "" || $password == "") {
            echo json_encode(array("empty" => "System error: Username and Password not entered."));
        } else {

            $r_table = new read("seratron", "users");
            $result = $r_table->values(array("username" => $username, "password" => $password));


            if ($result != NULL) {
                session_start();
                session_write_close();

                $w_table = new insert("seratron", "session");
                $w_table->values(array(
                    "id" => "0",
                    "session_id" => session_id(),
                    "user_id" => $result[0]['id'],
                    "ip" => $_SERVER['REMOTE_ADDR'],
                    "date_logged" => date('y-m-d h:i:s')
                ));
                echo json_encode(array("valid" => "true"));
            } else {
                echo json_encode(array("invalid" => "System error: Authentication failed."));
            }
        }
    }

    function register($username, $email, $password) {

        if (isset($username) && isset($email) && isset($password)) {
            
            $insert = new insert('seratron', 'users');
            $insert = $insert->values(array('username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $_POST['password']));

            if ($insert != false) {
                echo "You have been sent a validation email";
            }
        }else{
            echo "nah son";
        }
    }

}

?>
