<?php
 
  mysql_connect("cust-mysql-123-19","seratron","1989password!");
  mysql_select_db("seratron");
 
  $username=$_POST["username"];
  $query=mysql_query("SELECT * from users where users_username='$username'");
 
  $find=mysql_num_rows($query);
 
  echo $find;
  
?>
