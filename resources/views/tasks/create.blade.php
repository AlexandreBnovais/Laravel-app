<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tarefa</title>
</head>
<body>
    <h1>Nova Tarefa</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" required><br />

        <button type="submit">Criar Tarefa</button>
    </form>

    <a href="{{ route('tasks.index') }}">Voltar para lista</a>
</body>
</html>