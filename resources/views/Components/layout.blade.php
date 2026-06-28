<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    @if(session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1>Book Network</h1>
            @auth
                <span class="border-r-2 pr-2">
                    Hi there, {{ Auth::user()->name  }}
                </span>
                <a href="{{ route('books.index') }}">All Books</a>
                <a href="{{ route('books.create') }}">Add New Book</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            @else
                <a href="{{ route('show.login') }}" class="btn">Login</a>
                <a href="{{ route('show.register') }}" class="btn">Register</a>
            @endauth
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>