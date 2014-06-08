/* georges 
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
    */
    
  

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
