<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
</head>
<body>
    <h1>Editar Tarefa</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required><br />

        <button type="submit">Atualizar Tarefa</button>
    </form>

</body>
</html>