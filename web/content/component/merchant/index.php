<?php
include '../../lib/db.php';
include'../../modules/header.php';
?>
<?php include'../../modules/fixedmenutop.php' ?>
<?php include'../../modules/leftsidebar.php' ?>

<div id="mainwindow">

    <?php
    $r_table = new update("seratron", "users");
    $insert = $r_table->values("1", array("id"=>"1", "password"=>"password", "age"=> "1"));
    
    
   

    ?>




</div>

<?php include'../../modules/rightsidebar.php' ?>

</body>

</html>