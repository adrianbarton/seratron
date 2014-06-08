$(document).ready(function() {

    $("#reg-username").keyup(function(e) { //user types username on inputfiled
        var username = $(this).val(); //get the string typed by user
        $.post('/ajax/register.php', {'username': username}, function(data) { //make ajax call to check_username.php
            $("#usernameCheck").html(data); //dump the data received from PHP page
        });
    });


    $('#password').keyup(function()
    {
        $('#passwordStrengthCheck').html(checkStrength($('#password').val()))
    })

    function checkStrength(password)
    {
        var strength = 0;

        if (password.length < 6) {
            $('#passwordStrengthCheck').removeClass();
            $('#passwordStrenghtCheck').addClass('short');
            return  'short';
        }

        if (password.length > 7)
            strength += 1

        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))
            strength += 1

        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))
            strength += 1

        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))
            strength += 1


        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
            strength += 1

        if (strength < 2)
        {
            $('#passwordStrengthCheck').removeClass('')
            $('#passwordStrengthCheck').addClass('weak')
            return ''
        }
        else if (strength == 2)
        {
            $('#passwordStrengthCheck').removeClass()
            $('#passwordStrengthCheck').addClass('good')
            return ''
        }
        else
        {
            $('#passwordStrengthCheck').removeClass()
            $('#passwordStrengthCheck').addClass('strong')
            return ''
        }
    }

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

});

