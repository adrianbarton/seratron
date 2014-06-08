<?php
include '../lib/db.php';

if(isset($_POST["username"]))
{
    $variable= new read('seratron', 'users');
    $insert= $variable->values(array('username'=>$_POST['username']));
    
  //if returned value is more than 0, username is not available
  if($insert !== NULL) {
      echo "<img src='/images/cross.png' />";
  }else{
      echo "<img src='/images/tick.png' />";
  }
}

?>