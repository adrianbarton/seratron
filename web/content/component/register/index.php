<?php
include'../../modules/header.php';
?>

<script type="text/javascript" src="../../js.jquery-1.11.1.min.js"></script>
<script src="passwordStrength.js"></script>
<script src="ajax.js"></script> 




<div id="homemainwindow">

    <form name="form" id="form" method="post">
        <table class="registertable">



            <tr>

                <td>USERNAME :</td>
                <td><input type="text" id="username" name="username"/></td>

            </tr>
            <tr>

                <td>EMAIL :</td>
                <td><input type="text" id="email" name="email" /></td>

            </tr>
            <tr>

                <td >PASSWORD :</td>
                <td><input type="password" id="password" name="password"/></td>

            </tr>
            <tr>

                <td >CONFIRM PASSWORD :</td>
                <td><input type="password" id="confirm" name="confirm"/></td>

            </tr>
            <tr>

                <td colspan="2" style="text-align:center; padding-top:30px;"><input id="submit" type="submit" name="submit"/></td>

            </tr>

        </table>
    </form>
    <div id="result" style="height: 200px; width: 200px; color:white; border:1px solid white;"></div>
    <div id="result2" style="height: 200px; width: 200px; color:white; border:1px solid white;"></div>
</div>

</body>

</html>