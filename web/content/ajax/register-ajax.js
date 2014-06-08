$(document).ready(function() {
      $("#submit").click(function() {
        var username = $('#username').val();
        var password = $('#password').val();
        var confirm = $('#confirm').val();
        var email = $('#email').val();
        $.ajax({
            type: "POST",
            url: "/component/register/register.php",
            data: "username=" + username + "&password=" + password + "&confirm" + confirm + "&email=" + email,
            success: function(html) {
                window.location.href = '../../index.php';
            }
        });
        return false;

    });
})
