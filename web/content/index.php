<?php 
include'modules/header.php'; 
include'lib/db.php';
?>

<div class="container">

    <?php include'modules/leftsidebar.php'?>
    
    <div id="mainwindow">
        
        <?php
        $db = new db;
        $select = $db->select_db('seratron');
        
        if($select == TRUE){
            echo "selected database";
        }
        ?>

    </div>
    
</div>

</body>

</html>