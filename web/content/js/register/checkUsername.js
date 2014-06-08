$(document).ready(function(){
            $("#username").change(function(){
                 $("#usernameCheck").html("checking...");
             
 
            var username=$("#username").val();
 
              $.ajax({
                    type:"post",
                    url:"/component/register/checkUsername.php",
                    data:username,
                        success:function(data){
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