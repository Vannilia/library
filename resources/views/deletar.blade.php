<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Livro</title>
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

        .btn-danger {
            background-color: #c1121f;
            border: none;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-weight: bold;
            transition: transform 0.2s ease-in-out;
        }

        .btn-danger:hover {
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

        p {
            font-size: 1.2rem;
            color: #4a4a4a;
            text-align: center;
        }

        strong {
            color: #c1121f;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Excluir Livro</h1>

    <!-- Exibe mensagem de sucesso -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Confirmação de exclusão -->
    <p>Tem certeza que deseja excluir o livro <strong>{{ $livro->titulo }}</strong>?</p>

    <!-- Formulário para exclusão -->
    <form action="{{ route('livros.destroy', $livro->id) }}" method="POST" class="text-center">
        @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-danger">Excluir Livro</button>
        <a href="{{ route('livros.lista') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</body>
</html>
