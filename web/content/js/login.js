
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
