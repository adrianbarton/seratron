<?php
 require_once '/lib/db.php';
 
 $database = new read('seratron', 'users');
 
  $username=$_POST["username"];
  
  $result = $database->values('username', $username);
   
  $find=mysql_num_rows($result);
 
  echo $find;
  
?>
