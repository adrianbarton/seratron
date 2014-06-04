<?php include '../../lib/db.php';
include'../../modules/header.php'
?>
<?php include'../../modules/fixedmenutop.php' ?>
<?php include'../../modules/leftsidebar.php' ?>

<div id="mainwindow">

<?php 
$r_table = new readtable("seratron", "users");
$result = $r_table->values("id", "1");

echo $result['id'];
?>




</div>

<?php include'../../modules/rightsidebar.php' ?>

</body>

</html>