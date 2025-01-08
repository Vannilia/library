<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Brivajhy Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Urbanist', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #4a4a4a;
        }

        .container {
            margin-top: 50px;
        }

        .form-control {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #c1121f;
            box-shadow: 0 0 8px rgba(193, 18, 31, 0.5);
        }

        .btn-primary {
            background-color: #c1121f;
            border: none;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-weight: bold;
            transition: transform 0.2s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #a10f1b;
            transform: scale(1.05);
        }

        .alert-danger {
            border: 1px solid #e60000;
            background-color: #ffe6e6;
            color: #b30000;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .text-center a {
            color: #c1121f;
            font-weight: bold;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
            color: #a10f1b;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Login</h2>
            
            <!-- Exibe mensagens de erro -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>

            <div class="mt-3 text-center">
                <p>Não tem uma conta? <a href="{{ route('cadastroUsuario') }}">Cadastre-se</a></p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
