<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class DetailMovieController extends Controller
{    
    public function index($id) {
        $movies = Movie::all();
        
        if(is_numeric($id) && $id >= 0 && $id < count($movies) ) {


            //qui prendo il prodotto singolo
            $movie = $movies[$id];
          
    
        } else {
            abort(404); // qui lo faccio riportare alla pagina 404
        }
         return view('detail-movie' , [
             'movie' => $movie,
         ]);
    }
    //
}
