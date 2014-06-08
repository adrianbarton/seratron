$(document).ready(function(){
            $("#username").change(function(){
                 $("#usernameCheck").html("checking...");
             
 
            var username=$("#username").val();
 
              $.ajax({
                    type:"post",
                    url:"/component/register/checkUsername.php",
                    data:"username="+username,
                        success:function(data){
                        if(data==0){
                            $("#usernameCheck").addClass("<img src='/images/tick.png' />");
                            
                        }
                        else{
                            $("#usernameCheck").html("<img src='/images/cross.png' />");
                            
                            
                        }
                        
                    }
                 });
 
            });
 
         });