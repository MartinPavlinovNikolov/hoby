<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hoby</title>

        <!-- Fonts -->

        <!-- Bootstrap-v4.1.3 -->
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        
    </head>
    <body>
    <!--
    screen resolution 1366 X 768
    psd resolution 1936 X ?
    koeficient: 1366/1936 = 0.7055785124 for all elements width-dimentions
    -->
        <div id="wrapper">
            <!-- Nav-top START -->
            <div id="nav-top">
                <span class="nav-top-address"><span class="nav-top-address-main">Адрес: </span>гр. Габрово, бул. Арсеналски 113</span>
                <span class="nav-top-email">
                    <span class="nav-top-address-main">Е-майл: </span>
                    <a href="mailto:hobby@info.com">hobby@info.com</a>
                </span>
                <span class="nav-top-phone">
                    <span class="nav-top-phone-main">Телефон: </span>
                    <a href="tel:+359 478 213"> +359 478 213</a>,<a href="tel:+359 478 213"> +359 478 213</a>
                </span>
            </div><!-- Nav-top END -->

            <!-- Nav-bottom START -->
            <div id="nav-bottom">
                <div id="nav-bottom-logo"></div><div id="search-wrapper"><input id="search-input" type="search" placeholder="Търсене по Идентификационен номер"><button id="search-button">&nbsp;</button>
                </div>
                <p><span class="nav-bottom-contacts"><span class="nav-bottom-contacts-main">Свържете се с нас: </span><br>+359 478 213 / +359 478 213</span></p>
                <div id="icon-facebook">&nbsp;</div>
            </div><!-- Nav-bottom END -->
            
            <main>
                
            </main>

            <footer>
                
            </footer>
        </div>
    </body>
</html>
