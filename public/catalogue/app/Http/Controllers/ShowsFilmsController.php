<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\DB;

class ShowsFilmsController extends Controller
{
    public function showAllFilms(){
        //$films = Film::with('category')->get();
        $films = DB::table('films')->get();
        /*
        $authUser = Auth::user();
        $favs =$authUser->load("favs")["favs"];
        $favIds = array();
        foreach($favs as $fav){
            array_push($favIds,$fav->id);
        }
        */
        $data = [
            "films" => $films,
            /*"favs" = $favs,
            "favIds" = $favIds,
            "idUser" = Auth::id(),*/
        ];

        return view('film', $data); //,$data);
    }

    public function addFilmForm(){
        $films = DB::table('categories')->get();

        $data = [
            "categories" => $films,
        ];

        return view('addFilmForm',$data);//,$categories);
    }

    public function addFilm(Request $request){
        $name = $request->input('name');
        $id_genre = $request->input('category');
        $data = [
            'name' => $name,
            'id_genre' => $id_genre,
        ];
        Film::create($data);

        return redirect ('/films');
    }

    public function updateFilmForm(Film $film){
        $film_name = $film['name'];
        $data=[
            'film_name' => $film_name,
        ];
        return view('addFilmForm',$data);

    }

    public function updateFilm(Request $request, Film $film){
        //Récupérer les inputs comme create
        /*$data = [
            'name' => $name,
            'id_genre' => $id_genre,
        ];
        $film::update ($data);
        */
    }
}
