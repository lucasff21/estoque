<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased img-body">
    <div class=" relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 alignbutton">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 underline">Logar</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-primary ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <h1 style="text-align: center"><strong>ESTOQUE</strong></h1>

        <div class="container">
            <div class="row homecard">
                <div class="bg-white dark:bg-gray-800 overflow-hidden card-radius">
                    <p class="lucastesting">Meu Objetivo neste projeto é realizar a construção de um sistema de
                        estoque.
                    </p>
                    <p class="lucastesting">Nesta pagina inicial você poderá se cadastrar e também acessar o sistema em
                        criação.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class=" mt-4 col-lg-2">
                    <a href="https://www.linkedin.com/in/lucas-franca-f-5805b6177/">
                        <img class="icon-index" src="https://cdn-icons-png.flaticon.com/512/174/174857.png"
                            alt="Linkedin">
                    </a>

                    <a href="https://github.com/lucasff21/estoque">
                        <img class="icon-index" src="https://cdn-icons-png.flaticon.com/512/25/25231.png"
                            alt="Github">
                    </a>
                </div>

                <div class="col-lg-2 mt-5 ">
                    <p>Lucas França &copy; {{ date('Y') }}</p>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>

    </div>
</body>

</html>
