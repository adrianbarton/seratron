<!doctype html>
<html>
    
    
    
    <head>
        
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/seratron.css">
        <script src="/js/jquery-1.11.1.min.js"></script>
        <script>    
    $(document).ready(function() {
        
        $(document).on("click", ".login", function() {

                    login = this;

                    if ($(login).attr("data-login") === "deselected") {
                        $(login).attr("data-login", "selected");
                        $('#loginmodal').removeClass('hidden');

                    } else {
                        $('.loginbut') .onclick($('#loginmodal').addClass('hidden'));
                        $(login).attr("data-login", "deselected");
                    };
                });
        
    });
    
</script>
        
    </head>
    
    <body>
        
        <div id="loginmodal" class="hidden">
            
            <div id="loginbox">
                
                <div id="loginhead">
                    
                    <img src="/images/login.png"/>
                    
                </div>
                
                <table>
                    
                    <tr>
                        
                        <td><img src="/images/username.png"/></td>
                        <td><input class="blackinput" type="text"/></td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td><img src="/images/password.png"/></td>
                        <td><input class="blackinput" type="password"/></td>
                        
                    </tr>
                    
                    <tr>
            
                        <td colspan="2"><input class="blacksend loginbut" type="submit" value=""/></td>

                    </tr>
                    
                </table>
                
            </div>
            
        </div>