<!doctype html>
<html>
    
    
    
    <head>
        
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/seratron.css">
        <script src="/js/jquery-1.11.1.min.js"></script>
        <script>    
    $(document).ready(function() {
        
        $(document).on("click", ".login", function() {

                    login = this;

                    if ($(login).attr("data-login") === "deselected") {
                        $(login).attr("data-login", "selected");
                        $('#loginmodal').slideRight(5000);

                    } else {
                        $('.loginbut') .onclick($('#loginmodal').addClass('hidden'));
                        $(login).attr("data-login", "deselected");
                    };
                });
                 $(document).on("click", "#register", function() {

                   reg = this;

                    if ($(reg).attr("data-reg") === "deselected") {
                        $(reg).attr("data-reg", "selected");
                        $('#regformcontainer').removeClass('hidden');

                    };
                });
                
                
                
                
        $(function() {
            var $elie = $("#outercircle"), degree = 0, timer;
            rotate();
            function rotate() {

                  // For webkit browsers: e.g. Chrome
                $elie.css({ WebkitTransform: 'rotate(' + degree + 'deg)'});
                  // For Mozilla browser: e.g. Firefox
                $elie.css({ '-moz-transform': 'rotate(' + degree + 'deg)'});

                  // Animate rotation with a recursive call
                timer = setTimeout(function() {
                    ++degree; rotate();
                },10);
            }

              /** Toggle rotation on and off
            $("#login").hover(function() {
                clearTimeout(timer);
            }, function() {
                rotate(); 
            });**/
        });
        
        $(function() {
            var $elie = $("#middlecircle"), degree = 0, timer;
            rotate();
            function rotate() {

                  // For webkit browsers: e.g. Chrome
                $elie.css({ WebkitTransform: 'rotate(' + degree + 'deg)'});
                  // For Mozilla browser: e.g. Firefox
                $elie.css({ '-moz-transform': 'rotate(' + degree + 'deg)'});

                  // Animate rotation with a recursive call
                timer = setTimeout(function() {
                    --degree; rotate();
                },8);
            }

              /** Toggle rotation on and off
            $("#login").hover(function() {
                clearTimeout(timer);
            }, function() {
                rotate(); 
            });**/
        });
        
        $(function() {
            var $elie = $("#innercircle"), degree = 0, timer;
            rotate();
            function rotate() {

                  // For webkit browsers: e.g. Chrome
                $elie.css({ WebkitTransform: 'rotate(' + degree + 'deg)'});
                  // For Mozilla browser: e.g. Firefox
                $elie.css({ '-moz-transform': 'rotate(' + degree + 'deg)'});

                  // Animate rotation with a recursive call
                timer = setTimeout(function() {
                    ++degree; rotate();
                },6);
            }

              /** Toggle rotation on and off
            $("#login").hover(function() {
                clearTimeout(timer);
            }, function() {
                rotate(); 
            });**/
        });
        
        
        
    });
    
</script>
        
    </head>
    
    <body>
        