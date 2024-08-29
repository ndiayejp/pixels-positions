<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Welcome to pixels positions')</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/css/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotest">
    <div>
        <nav
            class="flex md:flex-row flex-col space-y-2 items-center justify-between px-10 py-5 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" />
                </a>
            </div>
            <div>
                <ul class="flex justify-between space-x-5 items-center font-bold">
                    <li><a href="#" class="hover:text-blue-700">Emplois</a></li>
                    <li><a href="#" class="hover:text-blue-700">Carrières</a></li>
                    <li><a href="#" class="hover:text-blue-700">Salaires</a></li>
                    <li><a href="#" class="hover:text-blue-700">Entreprises</a></li>
                </ul>
            </div>
            @auth
                <ul class="flex justify-between space-x-5 items-center font-bold">
                    <li><a href="/jobs/create"
                            class="hover:bg-blue-600 font-bold bg-blue-800 rounded text-white py-1.5 px-2.5">Publier un
                            emploi </a></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            @method('DELETE')
                            <button>Déconnexion</button>
                        </form>
                    </li>
                </ul>
            @endauth
            @guest
                <ul class="flex justify-between space-x-5 items-center font-bold">
                    <li><a href="/register" class="hover:text-blue-700">Senregistrer</a></li>
                    <li><a href="/login" class="hover:text-blue-700">Connexion</a></li>
                </ul>
            @endguest
        </nav>
        <main class="my-10 max-w-7xl mx-auto px-5">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
