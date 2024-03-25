<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Roboto" rel="stylesheet">
    
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    

    <script src="/js/app.js"></script>
    
</head>
<body class='d-flex flex-column min-vh-100 bg-light'>
    <header>
        <nav class="navbar navbar-light bg-secondary static-top">
            <div class="container">
                <a class="navbar-brand" href="/dashboard">@yield('title')</a>
                @yield('nav-btn')
            </div>
        </nav>
    </header>
    <main>
        <div class="col-md-10 offset-md-1 container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    
    
    <footer class="footer bg-secondary mt-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Desafio.</p>
                    </div>
                </div>
            </div>
        </footer>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>