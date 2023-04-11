<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Metodo che ritorna la Vista "welcome"
    public function homepage()
    {
        // Utilizza il Model 'Book' per recuperare tutti i libri della Tabella 'Books' tramite metodo statico 'all' che esegue una Query
        // Ritorna una 'Collection' (Array di Dati molto potente) di Oggetti, ogni Oggetto corrisponde a una Riga della Tabella

        $movies = Movie::all(); // 'all()' = SELECT * FROM movies

        // dd($movies);

        // Passo alla Vista i risultato della Query
        $data = [
            'movies' => $movies
        ];

        return view('welcome', $data);
    }
}
