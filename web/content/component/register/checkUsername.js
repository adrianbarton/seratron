$(document).ready(function(){
            $("#username").change(function(){
                 $("#usernameCheck").html("<img src='ajax-loader.gif' /> checking...");
             
 
            var username=$("#username").val();
 
              $.ajax({
                    type:"post",
                    url:"checkUsername.php",
                    data:"username="+username,
                        success:function(data){
                        if(data==0){
                            $("#usernameCheck").html("<img src='tick.png' /> Username available");
                        }
                        else{
                            $("#usernameCheck").html("<img src='cross.png' /> Username already taken");
                        }
                    }
                 });
 
            });
 
         });