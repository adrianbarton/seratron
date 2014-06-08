$(document).ready(function() {

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
});
