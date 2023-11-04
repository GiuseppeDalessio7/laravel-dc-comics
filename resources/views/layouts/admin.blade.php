<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'My title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>


    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('admin/comics') }}" aria-current="page">DashBoard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/comics/create') }}">Create Comic</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/') }}">Users Page</a>
        </li>
    </ul>


    <main class="">
        @yield('content')
    </main>


    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            <p>&copy; Dc Comics 4 ADMIN </p>
        </div>
    </footer>

</body>

</html>
