<?php
 require_once '../../lib/db.php';
 
 $database = new read('seratron', 'users');
 
  $username=$_POST["username"];
  
  $result = $database->values(array('username'=>$username));
  $count = count($result);
 
  echo $count;
  
 ?>
