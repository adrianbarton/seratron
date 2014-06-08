<?php

$query=mysql_connect("localhost","root","");
mysql_select_db("seratron",$query);
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))

$connect=new insert("seratron", "users");
if(isset($_POST['username']) && isset($_POST['password']))
{
$connect->values(array('username'=>$_POST['username'], 'password'=>$_POST['password']));

if($query2)
{
echo "<h2>Your Registration Process succesfully completed. Thank You</h2>";
}
}
?>