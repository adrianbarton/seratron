<?php
include '../../lib/db.php';
include'../../modules/header.php';
?>
<?php include'../../modules/fixedmenutop.php' ?>
<?php include'../../modules/leftsidebar.php' ?>

<div id="mainwindow">

    <?php
    $r_table = new read("seratron", "users");
    $insert = $r_table->values(array("id"=>"1", "password"=>"password", "age"=> "1"));
    
    echo "ID is: ".$insert[0]['id'];
    $count = count($insert);
   

    ?>




</div>

<?php include'../../modules/rightsidebar.php' ?>

</body>

</html>