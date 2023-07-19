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
    </style>
</head>
<body>
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
</body>
</html>
