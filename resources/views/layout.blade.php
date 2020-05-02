<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Semalt</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Задание 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('task2')}}">Задание 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('task3')}}">Задание 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('task4')}}">Задание 4</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main role="main" class="flex-shrink-0">
        <br>
        <div class="container">
            @yield('content')
        </div>
    </main>
    </body>
</html>
