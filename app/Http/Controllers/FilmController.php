<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films as Films;
use App\Comment as Comments;
use App\Genre as Genres;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Films::orderBy('created_at', 'desc')->paginate(1);
        return view('films.index', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genres::all();
        $genresList = array();
        foreach($genres as $genre) {
            $genresList[$genre->id] = $genre->name;
        }
        return view('films.create',['genres' => $genresList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Instantiate the class Films
        $film = new Films;

        $film->name         = $request->name;
        $film->description  = $request->description;
        $film->release_date = $request->release_date;
        $film->rating       = $request->rating;
        $film->ticket_price = $request->ticket_price;
        $film->country      = $request->country;
        $film->photo        = $request->photo;
        $film->slugurl      = str_slug($request->name,"-");
        $files = $request->file('image');
        if (isset($files)) {
            $name = 'film_' . time() . '_' . $i . '.' . $file->getClientOriginalName();
            $path = public_path() . '/img/films/';
            $file->move($path, $name);
            $film->image = $name;
        }
        
        //save in the model
        $film->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Retun the Film requested with the ID
        return Films::where('id', $id)->get();
    }

    public function showslug($slug)
    {
        //Retun the Film requested with the Slug
        $film = Films::where('slugurl', $slug)->first();
        $comments = Comments::where('film_id',$film->id)->OrderBy('created_at','DESC')->get();
        return view('films.show', ['film' => $film, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Films::where('id', $id)->get();
        $film->deltete();
    }
}
