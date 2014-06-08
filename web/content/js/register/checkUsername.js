$(document).ready(function(){
            $("#username").change(function(){
                 $("#usernameCheck").html("<img src='ajax-loader.gif' /> checking...");
             
 
            var username=$("#username").val();
 
              $.ajax({
                    type:"post",
                    url:"checkUsername.php",
                    data:"username="+username,
                        success:function(data){
<<<<<<< HEAD
                        if(data==0){
                            $("#usernameCheck").html("<img src='tick.png' /> Username available");
=======
                        if(data===0){
                            $("#usernameCheck").addClass("<img src='/images/tick.png' />");
>>>>>>> f7c1d1c00da005ab1ddd3be95d28d6017e638db3
                            
                        }
                        else{
                            $("#usernameCheck").html("<img src='cross.png' /> Username already taken");
                            
                        }
                    }
                 });
 
            });
 
         });