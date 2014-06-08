<?php

$query=mysql_connect("localhost","root","");
mysql_select_db("seratron",$query);
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
{
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$email=$_POST['email'];
$query2=mysql_query("insert into users values('','$username','$password','$email')");
}
?>