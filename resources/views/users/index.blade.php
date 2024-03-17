<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Grid</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td.actions {
            text-align: center;
        }
        td.actions a, td.actions button {
            padding: 6px 10px;
            margin-right: 5px;
            text-decoration: none;
            color: #333;
            background-color: #f2f2f2;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        td.actions button {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div>@if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                
           
        </div>
    @endif</div>
    <h1>Administrar Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->type }}</td>
                <td class="actions">
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>