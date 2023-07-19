<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/registerMovie', function (Request $info) {
    Movie::create([
        'name' => $info->name,
        'genres' => $info->genres,
        'date' => $info->date,
        'director' => $info->director,
        'cast' => $info->cast,
    ]);
    echo "Filme Salvo Com Sucesso!";
});

Route::get('/showMovie/{id_movie}', function ($id_movie) {
    $movie = Movie::findOrFail($id_movie);
    return view('showMovie', ['movie' => $movie]);
});



Route::get('/editMovie/{id_movie}', function ($id_movie) {
    $movie = Movie::findOrFail($id_movie);
    return view('edit_movie', ['movie' => $movie]);
});

Route::put('/updateMovie/{id_movie}', function (Request $info, $id_movie) {
    $movie = Movie::findOrFail($id_movie);
    $movie -> update([
        'name' => $info->name,
        'genres' => $info->genres,
        'date' => $info->date,
        'director' => $info->director,
        'cast' => $info->cast,
    ]);
    echo "Filme Atualizado Com Sucesso!";
}); 


Route::get('/deleteMovie/{id_movie}', function ($id_movie) {
    $movie = Movie::where('id', $id_movie)->first();
    if (!$movie) {
        return response("Filme não encontrado!", 404);
    }
    $movie->delete();
    return "Filme Deletado Com Sucesso!";
});