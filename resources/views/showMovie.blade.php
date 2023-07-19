<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme</title>

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

    div {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 40px;
        border: 1px solid #333;
        border-radius: 5px;
        background-color: #2b2b2b;
    }

    .buttons {
        display: flex;
        justify-content: space-between;
    }

    button {
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .edit-button {
        background-color: #007bff;
        color: #fff;
    }

    .edit-button:hover {
        background-color: #0056b3;
    }

    .delete-button {
        background-color: #dc3545;
        color: #fff;
        margin-left: 10px;
    }

    .delete-button:hover {
        background-color: #b02a37;
    }

    </style>
</head>
<body>
    <div class="container">
        <h1>Informações do Filme</h1>

        <div>
            <label for="name">Título:</label>
            <span>{{ $movie->name }}</span>
        </div>

        <div>
            <label for="genres">Gênero do Filme:</label>
            <span>{{ $movie->genres }}</span>
        </div>

        <div>
            <label for="date">Data de Lançamento:</label>
            <span>{{ $movie->date }}</span>
        </div>

        <div>
            <label for="director">Diretor:</label>
            <span>{{ $movie->director }}</span>
        </div>

        <div>
            <label for="cast">Elenco:</label>
            <span>{{ $movie->cast }}</span>
        </div>

        <div class="buttons">
            <button class="edit-button" onclick="window.location.href='/editMovie/{{ $movie->id }}'">Editar</button>
            <button class="delete-button" onclick="window.location.href='/deleteMovie/{{ $movie->id }}'">Deletar</button>
        </div>
    </div>
</body>
</html>
