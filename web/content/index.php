
<?php
include'modules/header.php';
include'lib/db.php';
include'component/register/register.php';
?>

<script src="/js/register/checkUsername.js"></script>
<script src="/js/register/passwordStrength.js"></script>
<script src="/js/register/passwordMatch.js"></script>
<script>

    $(document).ready(function() {

        function processForm(formId) {
            $.post("ajax/login.php", $("#" + formId).serialize(), function(data) {
                
                if (typeof data.empty != "undefined") {
                    $("#message").html(data.empty);
                } else if (typeof data.invalid != "undefined") {
                    $("#message").html(data.invalid);
                } else if (typeof data.valid != "undefined") {
                    window.location.href = '/overview';
                }
                
            }, 'json');
        }

        $('.loginbut').on("click", function() {
            console.log("CLICK");
            processForm('loginform');
        })

    });

</script>


<?php

var_dump($_POST);

?>


<div id="homemainwindow">

    <div class="login" data-toggle="deselect"></div>

    <div id="leftcolumn">

    </div><div id="logincolumn">
        


        <form action="" method ="POST" name="login" id="loginform">
            <table class="logintable">                   
                <tr>     
                    <td>username:</td>
                    <td><input class="blackinput" id="username" name="username" type="text"/></td>                       
                </tr>                   
                <tr>                       
                    <td>password :</td>
                    <td><input class="blackinput" password="password" name="password" type="password"/></td>   
                <div id="message"></div>
                </tr>                    
            </table>


            <div id="login">

                <div id="outercircle">



                </div>

                <div id="middlecircle">



                </div>

                <div id="innercircle">



                </div>

                <div id="loginbut">

                    <input class="loginbut" type="button" name="login" value="LOGIN"/>

                </div>

        </form>



    </div>

    <div id="register" data-reg="deselected">

        R<br/>E<br/>G<br/>I<br/>S<br/>T<br/>E<br/>R

    </div>
    <div id="regformcontainer" class="hidden">

        <div id="registerform">

            <form name="form" id="form" method="post">

                <table class="registertable">



                    <tr>

                        <td>username :</td>
                        <td><input type="text" id="username" name="username"/></td>
                        <td><div id="usernameCheck"></div></td>

                    </tr>
                    <tr>

                        <td>email :</td>
                        <td><input type="text" id="email" name="email" /></td>

                    </tr>
                    <tr>

                        <td >password :</td>
                        <td><input type="password" id="password" name="password"/></td>
                        <td><div id="passwordStrengthCheck"></div></td>

                    </tr>
                    <tr>

                        <td >confirm password :</td>
                        <td><input type="password" id="confirm" name="confirm"/></td>
                        <td><div id="passwordMatchCheck"></div></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align:left;"><input id="submit" type="submit" name="submit" value="register"/></td>

                    </tr>

                </table>   

            </form>

        </div>

    </div>

</div>

</div>


</body>

</html>