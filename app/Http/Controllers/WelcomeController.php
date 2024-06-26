<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('welcome', compact('artikel'));
    }
}
