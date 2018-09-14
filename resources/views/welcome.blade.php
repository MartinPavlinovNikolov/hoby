<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hoby</title>

        <!-- Fonts -->

        <!-- Bootstrap-v4.1.3 -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        
    </head>
    <body>
        <div class="container-fluid bg-color-3">
            <header>
                <nav>
                    <div id="nav-top" class="row bg-color-6">
                        <div class="col offset-2">
                            <ul>
                                <li class="d-inline-block"><span class="color-1">Адрес: </span><span class="color-4">гр. Габрово, бул. Арсеналски 113</span></li>
                                <li class="d-inline-block"><span class="color-1">Телефон: </span><span class="color-4">+359 478 213, +359 478 213</span></li>
                                <li class="d-inline-block"><span class="color-1">Е-мeйл: </span><span class="color-4">hobby@info.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div id="nav-bottom" class="row bg-color-3">
                        <div class="col-2 offset-2">
                            <img src="{{ asset('images/hoby-logo.png') }}" alt="logo">
                        </div>
                        <div class="col-3">
                            <input id="search" type="text">
                        </div>
                        <div class="col-2">
                            <p>
                                <span class="color-1">Свържете се с нас:</span>
                                <span class="color-4">+359 478 213 / +359 478 213</span>
                            </p>
                        </div>
                        <div class="col-1">
                            <span>
                            F
                            </span>
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                
            </main>
            <footer>
                
            </footer>
        </div>
    </body>
</html>
