<?php

include '../lib/functions.php';

if (isset($_POST['password'])) {

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    functions::log_in($username, $password);
} else {
    header("HTTP/1.0 400 Bad Request");
}
?>