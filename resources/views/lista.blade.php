{{-- resources/views/livros/lista.blade.php --}}

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Urbanist', sans-serif;
            background-color: #f8f9fa; /* Cor de fundo suave */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #4a4a4a; /* Cor do título */
            /*text-shadow: 1px 1px 2px #ddd; /* Leve sombra no texto */
        }

        .table {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra ao redor da tabela */
        }

        .table th {
            background-color: #c1121f; /* Cabeçalho da tabela */
            color: white;
            text-align: center;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .btn-primary {
            margin: 10px;
            background-color: #c1121f;
            box-shadow: 4px 4px 0px #000; /* Sombra sólida preta */
            border: none; /* Remove bordas se necessário */
            font-weight: bold; /* Destaca o texto */
            transition: transform 0.2s ease-in-out;
        }
        .btn-warning {
            margin: 10px;
            background-color: #c1121f;
            box-shadow: 4px 4px 0px #000; /* Sombra sólida preta */
            border: none; /* Remove bordas se necessário */
            font-weight: bold; /* Destaca o texto */
            transition: transform 0.2s ease-in-out;
        }
        .btn-danger {
            margin: 10px;
            background-color: #c1121f;
            box-shadow: 4px 4px 0px #000; /* Sombra sólida preta */
            border: none; /* Remove bordas se necessário */
            font-weight: bold; /* Destaca o texto */
            transition: transform 0.2s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #45a049;
            transform: scale(1.05); /* Aumenta ligeiramente no hover */
        }

        .btn-warning:hover {
            background-color: #ffbb33;
            transform: scale(1.05);
        }

        .btn-danger:hover {
            background-color: #e60000;
            transform: scale(1.05);
        }

        .alert-success {
            border: 1px solid #45a049;
            background-color: #e6ffe6;
            color: #2d662d;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1>Lista de Livros</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <td>{{ $livro->id }}</td>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->descricao }}</td>
                    <td>
                        <a href="{{ route('livros.editar', $livro->id) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('livros.deletar', $livro->id) }}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('home') }}" class="btn btn-primary">Voltar para o Home</a>
</div>

</body>
</html>
