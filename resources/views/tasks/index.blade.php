<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do-List</title>
</head>
<body>
    <h1>Lista de tarefas</h1>

    <a href="{{ route('tasks.create') }}">Adicionar Nova Tarefa</a>

    <ul>
        @foreach ($tasks as $task) 
            <li>
                {{ $task->title}} - 
                {{ $task->completed ? 'Concluido' : 'Pendente' }}
                <a href="{{ route('tasks.edit', $task->id) }}">Editar</a> |
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>