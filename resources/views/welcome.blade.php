<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Network</title>
    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>WELCOME to NINJAS</h1>
    <p>Click button to view Books</p>
    <a href="{{ route('books.index') }}" class="btn mt-4 inline-block">
        Find Books
    </a>
</body>
</html>