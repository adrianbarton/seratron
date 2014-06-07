<?php
 
  mysql_connect("localhost","root","");
  mysql_select_db("seratron");
 
  $username=$_POST["username"];
  $query=mysql_query("SELECT * from users where username='$username'");
 
  $find=mysql_num_rows($query);
 
  echo $find;
  
?>
