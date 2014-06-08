<?php
$connect=new insert("seratron", "users");
if(isset($_POST['username']) && isset($_POST['password']))
{
$connect->values(array('username'=>$_POST['username'], 'password'=>$_POST['password']));
var_dump($connect);
if($query2)
{
echo "<h2>Your Registration Process succesfully completed. Thank You</h2>";
}
}
?>