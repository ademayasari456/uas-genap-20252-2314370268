<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TikelPik</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="{{ route('articles.index') }}">TikelPik</a>
        <a class="btn btn-outline-light" href="{{ route('articles.create') }}">Tambah Artikel</a>
    </nav>
    <div class="container py-4">
        @yield('content')
    </div>
</body>
</html>
