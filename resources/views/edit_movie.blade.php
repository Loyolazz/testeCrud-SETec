<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Informações</title>

    <style>
    body {
        background-color: #1c1c1c;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        padding-top: 30px;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #333;
        border-radius: 5px;
        background-color: #2b2b2b;
    }

    div {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #444;
        border-radius: 3px;
        background-color: #3d3d3d;
        color: #fff;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }

    </style>
</head>

<body>
    <h1>Editar Informações do Filme</h1>
    <form action="/updateMovie/{{ $movie->id }}" method="POST">
        @csrf
        @method("PUT")
        <div>
            <label for="name">Título:</label>
            <input type="text" id="name" placeholder="Nome do Filme Aqui" name="name" value="{{ $movie -> name }}" required>
        </div>

        <div>
            <label for="genres">Gênero do Filme:</label>
            <input type="text" id="genres" placeholder="Gênero" name="genres" value="{{ $movie -> genres }}" required>
        </div>

        <div>
            <label for="date">Data de Lançamento:</label>
            <input type="text" id="date" placeholder="Data que lançou o filme" name="date" value="{{ $movie -> date }}" required>
        </div>

        <div>
            <label for="director">Diretor:</label>
            <input type="text" id="director" placeholder="Diretor do Filme" name="director" value="{{ $movie -> director }}" required>
        </div>

        <div>
            <label for="cast">Elenco:</label>
            <input type="text" id="cast" placeholder="Elenco do Filme" name="cast" value="{{ $movie -> cast }}" required>
        </div>

        <div>
            <button type="submit">Editar Informações do Filme</button>
        </div>
    </form>

</body>
</html>
