<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
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

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #4a4a4a;
        }

        .container {
            margin-top: 50px;
            max-width: 700px;
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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

        .btn-success {
            background-color: #198754;
            border: none;
            font-weight: bold;
        }

        .alert-success {
            border: 1px solid #198754;
            background-color: #e6ffe6;
            color: #155724;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Livros</h1>
        
        <!-- Exibe mensagem de sucesso -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulário de cadastro de livro -->
        <form action="{{ route('cadastroLivro') }}" method="POST">
            @csrf

            <!-- Título -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control" required>
            </div>

            <!-- Autor -->
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" id="autor" name="autor" class="form-control" required>
            </div>

            <!-- Descrição -->
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea id="descricao" name="descricao" rows="4" class="form-control" required></textarea>
            </div>

            <!-- Preço -->
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" id="preco" name="preco" step="0.01" class="form-control" required>
            </div>

            <!-- Estoque -->
            <div class="mb-3">
                <label for="estoque" class="form-label">Quantidade em Estoque</label>
                <input type="number" id="estoque" name="estoque" class="form-control" required>
            </div>

            <!-- Botão de cadastro -->
            <button type="submit" class="btn btn-primary w-100">Cadastrar Livro</button>
        </form>

        <!-- Link para lista de livros -->
        @if (session('success'))
            <a href="{{ route('livros.lista') }}" class="btn btn-success mt-3 w-100">Ver meus livros</a>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
