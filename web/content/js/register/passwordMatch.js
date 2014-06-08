$(document).ready(function() {

    $('#confirm').keyup(function()
    {
        $('#passwordMatchCheck').html(checkMatch($('#password').val(), $('#confirm').val()))
    })

    function checkMatch(password, confirm)
{
        if (password === confirm) {
            $('#passwordMatchCheck').removeClass()
            $('#passwordMatchCheck').addClass('tick')
        }
        else
            {
                $('#passwordMatchCheck').removeClass()
                $('#passwordMatchCheck').addClass('cross')
            }
    }

})

