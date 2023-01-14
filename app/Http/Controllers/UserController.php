<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        $films = User::findOrFail(Auth::user()->id)->films()->get();
        $total = 0;
        foreach ($films as $film) {
            $total += $film->prix;
        }
        return view('basket', [
            'films' => $films,
            'total' => $total
        ]);
    }
}
