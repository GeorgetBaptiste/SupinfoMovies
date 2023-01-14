<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{
    public function home()
    {
        return view('home', [
            'films' => Film::orderBy('date', 'desc')->take(6)->get()
        ]);
    }

    public function show($id)
    {
        return view('film', [
            'film' => Film::findOrFail($id)
        ]);
    }

    public function drame()
    {
        return view('categorie', [
            'films' => Film::where('categorie', 'drame')->orderBy('date', 'desc')->get(),
        ]);
    }

    public function action()
    {
        return view('categorie', [
            'films' => Film::where('categorie', 'action')->orderBy('date', 'desc')->get(),
        ]);
    }

    public function search()
    {
        $q = request()->input('q');
        $films = Film::where('realisateur', 'like', "%$q%")->orWhere('title', 'like', "%$q%")->orWhere('categorie', 'like', "%$q%")->orWhere('acteurs', 'like', "%$q%")->orWhere('description', 'like', "%$q%")->orderBy('date', 'desc')->get();
        return view('search')->with('films', $films);
    }

    public function realisateur($realisateur)
    {
        return view('realisateur', [
            'films' => Film::where('realisateur', $realisateur)->orderBy('date', 'desc')->get(),
        ]);
    }
}
