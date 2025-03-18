<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
        }
        .content-container {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
    @include('layout.header')
    <div class="d-flex">
        @include('layout.sidebar')
        <main class="content-container flex-grow-1">
            @yield('content')
        </main>
    </div>
    @include('layout.footer')
</body>
</html>