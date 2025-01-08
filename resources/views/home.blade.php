<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brivajhy Library</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            font-family: "Urbanist", sans-serif;
            font-weight: 400;
            background-image: url('{{ asset('imagens/back-livraria-3.png') }}');
            background-repeat: no-repeat; /* Evita que a imagem se repita */
            background-size: cover; /* Ajusta a imagem para cobrir a tela */
            background-position: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .navbar, footer {
            background-color: transparent; /* Azul petróleo */
        }
        .navbar .nav-link, .navbar .navbar-brand, footer p {
            color: white !important;
        }
        .navbar-toggler {
            border-color: black; /* Remove a borda do botão */
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); /* Branco */
        }
        .hero {
            background-color: transparent; /* Azul complementar */
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
        }
        .hero h1 {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
            font-family: "Urbanist", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            font-size: 4rem;
            color: white; /* Azul petróleo */
        }
        .hero p {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            font-family: "Urbanist", sans-serif;
            font-weight: 400;
            font-size: 1.7rem;
            margin-bottom: 30px;
            color: white;
        }
        .btn-primary {
            margin: 10px;
            background-color: #c1121f;
            box-shadow: 4px 4px 0px #000; /* Sombra sólida preta */
            border: none; /* Remove bordas se necessário */
            font-weight: bold; /* Destaca o texto */
            transition: transform 0.2s ease-in-out;
        }

        .btn-secondary {
            color: #c1121f;
            margin: 10px;
            background-color: white;
            box-shadow: 4px 4px 0px #000; /* Sombra sólida preta */
            border: none; /* Remove bordas se necessário */
            font-weight: bold; /* Destaca o texto */
            transition: transform 0.2s ease-in-out;
        }

        .btn-primary:hover, .btn-secondary:hover {
            background-color: #45a049;
            transform: translate(-2px, -2px); /* Efeito de "movimento" ao passar o mouse */
            box-shadow: 6px 6px 0px #000; /* Aumenta a sombra no hover */
        }

        footer {
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="imagens/livraria-logo-2.png" alt="Logo Brivajhy Library" style="height: 140px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    @auth
                        <!-- Botão Logout -->
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    @else
                        <!-- Botão Login -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <!-- Botão Cadastro -->
                        <li class="nav-item">
                            <a href="{{ route('cadastroUsuario') }}" class="btn btn-primary">Cadastro</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div>
            @auth
                <h1>Bem-vindo(a), {{ auth()->user()->firstName }}!</h1>
            @else
                <h1>Bem-vindo à Brivajhy Library!</h1>
            @endauth
            <p>Descubra livros incríveis ou compartilhe suas recomendações.</p>
            <div>
                <a href="{{ route('livros.lista') }}" class="btn btn-primary btn-lg">Encontre seu livro aqui!</a>
                <a href="{{ route('cadastroLivro') }}" class="btn btn-secondary btn-lg">Cadastre um livro!</a>
                </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; Brivajhy Library, 2024</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
