$(document).ready(function() {
      $("#submit").click(function() {
        var username = $('#username').val();
        var password = $('#password').val();
        var confirm = $('#confirm').val();
        var email = $('#email').val();
        $.ajax({
            type: "POST",
            url: "/modules/register.php",
            data: "username=" + username + "&password=" + password + "&confirm" + confirm + "&email=" + email,
            success: function(html) {
                window.location.href = '../../index.php';
            }
        });
        return false;

    });
            $("#reg-username").change(function(){
                 $("#usernameCheck").html("checking...");
             
 
          var regusername=$("#reg-username").val();
 
              $.ajax({
                    type:"post",
                    url:"/component/register/checkUsername.php",
                    data:regusername,
                    
                        success:function(data){ 
                            alert(data);
                        if(data !== NULL){
                            $("#usernameCheck").html("<img src='/images/cross.png' />");
                        }
                        else{
                            $("#usernameCheck").html("<img src='/images/tick.png' />");
                            
                        }
                        
                    }
                 });
 
            });
 
         });
