<?php
<<<<<<< HEAD

 require_once '/lib/db.php';
=======
 require_once '../../lib/db.php';
>>>>>>> 58a5840f822f03a7c83063e143e24d9d44a78f1d
 
 $database = new read('seratron', 'users');
 
  $username=$_POST["username"];
  
  $result = $database->values('username', $username);
   
  $count = count($result);
 
  echo $count;
  
 ?>
