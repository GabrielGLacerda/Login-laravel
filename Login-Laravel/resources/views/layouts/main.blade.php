<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">

            <div class="navbar-start">
                <a href="{{route('index')}}" class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Documentation
                </a>

            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{route('user.create')}}" class="button is-primary">
                            <strong>Criar conta</strong>
                        </a>
                        <a href="{{route('user.login')}}" class="button is-light">
                            Entrar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>