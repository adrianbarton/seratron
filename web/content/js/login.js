    $(document).ready(function() {

        function processForm(formId) {
            $.post("/ajax/login.php", $("#" + formId).serialize(), function(data) {
                
                if (typeof data.empty != "undefined") {
                    $("#message").html(data.empty);
                } else if (typeof data.invalid != "undefined") {
                    $("#message").html(data.invalid);
                } else if (typeof data.valid != "undefined") {
                    window.location.href = '/component/loginhome';
                }
                
            }, 'json');
        }

        $('.loginbut').on("click", function() {
            console.log("CLICK");
            processForm('loginform');
        })

    });
