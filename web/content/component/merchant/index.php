<?php
include '../../lib/db.php';
include'../../modules/header.php';
?>
<?php include'../../modules/fixedmenutop.php' ?>
<?php include'../../modules/leftsidebar.php' ?>

<div id="mainwindow">

    <?php
    $r_table = new insert("seratron", "users");
    $insert = $r_table->values(array("value" => "199", "age" => "0", "password" => "testing"));

    ?>




</div>

<?php include'../../modules/rightsidebar.php' ?>

</body>

</html>