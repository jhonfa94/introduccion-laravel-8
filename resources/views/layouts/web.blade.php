<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos de progrmación Web</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body>

    <header class="show-lg">
        <div class="bg-blue-900 py-1">
            <nav class="bg-blue-800 py-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo_platzi.png') }}" class="h-8 mx-auto">
                </a>
            </nav>

        </div>
    </header>

    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>


    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard', []) }}" class="text-sm text-gray-700 underline">Dashobard</a>
        @else
            <a href="{{ url('login', []) }}" class="text-sm text-gray-700 underline">Login</a>
            <a href="{{ url('register', []) }}" class="ml-4 text-sm text-gray-700 underline">Register</a>

        @endauth
        
    </footer>

</body>

</html>
