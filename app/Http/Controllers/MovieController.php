<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{

/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAll() {
        $movie = Movie::all();
        return response()->json($movie, 200);
    }

    public function add(Request $request) {
        $movie_name = $request->input('movie_name');
        $ratings = $request->input('ratings');
        $fees = $request->input('fees');
        $release_date = $request->input('realese_date');

        $movie = new Movie();
        $movie->movie_name = $movie_name;
        $movie->ratings = $ratings;
        $movie->fees = $fees;
        $movie->realese_date = $release_date;

        $movie->save();

        return response()->json($movie, 200);
    }

    public function edit(Request $request, $id) {

        $movie_name = $request->input('movie_name');
        $ratings = $request->input('ratings');
        $fees = $request->input('fees');
        $realese_date = $request->input('realese_date');

        $movie = Movie::find($id);
        $movie->movie_name = $movie_name;
        $movie->ratings = $ratings;
        $movie->fees = $fees;
        $movie->realese_date = $realese_date;

        $movie->save();

        return response()->json($movie, 200);
    }


    public function showId($id) {
        $movie = Movie::find($id);
        return response()->json($movie, 200);
    }

    public function delete($id) {
        $movie = Movie::find($id);
        $movie->delete();
        return response()->json(['Запись удалена'], 200);
    }


    //
}
