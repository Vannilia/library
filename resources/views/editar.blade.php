<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
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

        .btn-secondary {
            background-color: #6c757d;
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
    <h1>Editar Livro</h1>

    <!-- Exibe mensagem de sucesso -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulário de edição de livro -->
    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indica que é uma requisição PUT -->

        <!-- Título -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo', $livro->titulo) }}" required>
        </div>

        <!-- Autor -->
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" id="autor" name="autor" class="form-control" value="{{ old('autor', $livro->autor) }}" required>
        </div>

        <!-- Descrição -->
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea id="descricao" name="descricao" rows="4" class="form-control" required>{{ old('descricao', $livro->descricao) }}</textarea>
        </div>

        <!-- Botão de atualização -->
        <button type="submit" class="btn btn-primary w-100">Atualizar Livro</button>
    </form>

    <!-- Link para voltar para a lista de livros -->
    <a href="{{ route('livros.lista') }}" class="btn btn-secondary mt-3 w-100">Voltar para a Lista</a>
</div>
</body>
</html>
