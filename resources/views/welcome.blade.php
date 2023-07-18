<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Filmes</title>

    <style>
    body {
        background-color: #000;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
    }
    
    div {
        margin-top: 10px;
    }

    </style>
</head>
<body>
    <form action="/registerMovie" method="POST">
        @csrf

        <div>
            <label for="">Titulo :</label>
            <input type="text" placeholder="Nome do Filme Aqui" name="name_movie">
        </div>

        <div>
            <label for="">Genero do Filme :</label>
            <input type="text" placeholder="Genero" name="name_type">
        </div>

        <div>
            <label for="">Data de Lancamento :</label>
            <input type="text" placeholder="Data que lançou o filme" name="name_date">
        </div>

        <div>
            <label for="">Diretor :</label>
            <input type="text" placeholder="Diretor do Filme" name="name_director">
        </div>

        <div>
            <label for="">Elenco :</label>
            <input type="text" placeholder="Elenco do Filme" name="name_cast">
        </div>

        <div>
            <button>Salvar Filme</button>
        </div>
    </form>

</body>
</html>
