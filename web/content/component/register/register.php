<?php
<<<<<<< HEAD

$query=mysql_connect("localhost","root","");
mysql_select_db("seratron",$query);
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
=======
$connect=new insert("seratron", "users");
if(isset($_POST['username']) && isset($_POST['password']))
>>>>>>> f7c1d1c00da005ab1ddd3be95d28d6017e638db3
{
$connect->values(array('username'=>$_POST['username'], 'password'=>$_POST['password']));
var_dump($connect);
if($query2)
{
echo "<h2>Your Registration Process succesfully completed. Thank You</h2>";
}
}
?>