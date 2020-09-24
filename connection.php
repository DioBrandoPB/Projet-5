<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="vendor/css/style.css">
    <script type="text/javascript" src="vendor/js/basic.js"></script>
</head>

<body>
    <?php
    require 'navbar.php';
    ?>



        <section id="connection">

            <div class="bloc">
                <div class="formContainer">
                    <div class="form">
                        <h2>Bienvenue chez G.N.C</h2>
                        <img src="vendor/img/soulignement.png" alt="" class="soulignement">
                        <form class="login-form">
                            <input type="text" placeholder="Pseudo" />
                            <input type="password" placeholder="Mot de passe" />
                            <button class="boutons btnBasique"><span>Connection</span></button>
                            <p class="message">Pas inscrit? <a href="#">Créer un compte</a></p>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <?php
    require 'footer.php';
    ?> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <script>
            $('.navTrigger').click(function() {
                $(this).toggleClass('active');
                console.log("Clicked menu");
                $("#mainListDiv").toggleClass("show_list");
                $("#mainListDiv").fadeIn();

            });

            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
</body>

</html>