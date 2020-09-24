<!DOCTYPE html>
<html lang="fr">

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

    <section class="home">
        <div id="banniere">
            <div id="imgBanniere"></div>
            <div id="imgBanniereMin"></div>
            <button id="flecheBanniere"><a href="#sectionServices" class="scroll"><i class="fas fa-arrow-down"></i></a></button>
        </div>
    </section>
    <section id="sectionServices">
        <div class="bloc">
            <h1>Nos services</h1>
            <img src="vendor/img/soulignement.png" alt="" class="soulignement">
            <h2>Pourquoi utiliser G.N.C ?</h2> <br>
            <p>
                Notre plateforme vous propose des services à la fois simples et indispensables, ne vous est-il jamais arrivé de ne pas vous rappelez le nombres de jeux que vous avez terminé afin de pouvoir exhiber vos qualités de gamer auprès de votre entourage sans
                jamais vous rappeler du chiffre exact?<br></p>

            <p>G.N.C vous le permet avec quelques bonus, vous pouvez en plus de tenir le compte du nombres de titres que vous avez finis, vous créez une liste afin de ne jamais oublié à quel jeux vous souhaitez jouer a l'avenir, combien de fois vous est-il
                arrivé d'oublié la sortie d'un titre a cause des evenements de la vie quotidienne pour vous en rappeler trop tard et passé a coté du jeu du moment? </p><br>
            <p><strong>G.N.C est LA solution dont vous avez besoin</strong></p>


        </div>

    </section>
    <section id="prefooter">
        <div>

        </div>
    </section>
    <?php
    require 'footer.php';
    ?> 

    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $('.navResponsive').click(function() {
            $(this).toggleClass('active');
            console.log("Clicked menu");
            $("#menuPrincipal").toggleClass("show_list");
            $("#menuPrincipal").fadeIn();

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