<?php
include '../../lib/db.php';
include'../../modules/header.php';
?>
<?php include'../../modules/fixedmenutop.php' ?>
<?php include'../../modules/leftsidebar.php' ?>

<div id="mainwindow">

    <?php
     $r_table = new read("seratron", "users");
           $result = $r_table->values(array("username" => $username, "password" => $password));
           var_dump($result);
    
    
   

    ?>




</div>

<?php include'../../modules/rightsidebar.php' ?>

</body>

</html>