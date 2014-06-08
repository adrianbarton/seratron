<?php
include '../../lib/db.php';
include'../../modules/header.php';
?>
<?php include'../../modules/fixedmenutop.php' ?>
<?php include'../../modules/leftsidebar.php' ?>

<div id="mainwindow">

    <?php
    $r_table = new update("seratron", "users");
    $insert = $r_table->values("3", array( "age"=>"1000", "value"=>"15"));
    //var_dump($insert);
    
    
   

    ?>




</div>

<?php include'../../modules/rightsidebar.php' ?>

</body>

</html>