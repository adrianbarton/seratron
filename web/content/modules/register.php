<?php

$insert = new insert("seratron", "users");

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
{
$insert->values(array("username"=>$_POST['username'],"password"=>$_POST['password']));
}
?>

<script src="/js/register/checkUsername.js"></script>
<script src="/js/register/passwordStrength.js"></script>
<script src="/js/register/passwordMatch.js"></script>
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