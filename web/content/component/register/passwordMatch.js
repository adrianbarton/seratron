$(document).ready(function() {

    $('#confirm').keyup(function()
    {
        $('#passwordMatchCheck').html(checkMatch($('#password').val(), $('#confirm').val()))
    })

    function checkMatch(password, confirm)
{
        if (password === confirm) {
            $('#passwordMatchCheck').removeClass()
            $('#passwordMatchCheck').addClass('match')
            return 'Passwords Match'
        }
        else
            {
                $('#passwordMatchCheck').removeClass()
                $('#passwordMatchCheck').addClass('nomatch')
                return 'Passwords Do Not Match'
            }
    }

})

