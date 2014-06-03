<div id="mainwindow">
    
    <?php
    if (!mysql_connect("cust-mysql-123-19", "seratron", "1989password!")){
        echo "Here littlekiddies";
        exit('ERROR BITCH');
         
    }else{
        echo "connected";
    }
    if (!mysql_select_db('seratron')){
        exit('no db');
    }else{
        echo "found db";
    }
    ?>
    
</div>