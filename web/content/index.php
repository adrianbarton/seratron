
<?php 
include'modules/header.php';
include'lib/db.php'
?>

<script src="/js/register/checkUsername.js"></script>
<script src="/js/register/passwordStrength.js"></script>
<script src="/js/register/passwordMatch.js"></script>
<?php
$connect=new insert("seratron", "users");
if(isset($_POST['username']) && isset($_POST['password']))
{
$connect->values(array('username'=>$_POST['username'], 'password'=>$_POST['password']));
var_dump($connect);
if($query2)
{
echo "<h2>Your Registration Process succesfully completed. Thank You</h2>";
}
}
?>

    
    <div id="homemainwindow">
        
        <div id="leftcolumn">
            
        </div><div id="logincolumn">
            
            
            
                <table class="logintable">
                    
                    <tr>
                        
                        <td>username :</td>
                        <td><input class="blackinput" type="text"/></td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td>password :</td>
                        <td><input class="blackinput" type="password"/></td>
                        
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
                    
                    <input class="loginbut" type="submit" name="login" value="LOGIN"/>
                    
                </div>
                
                
                
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