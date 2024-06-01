<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Eskul;
use Illuminate\Http\Request;


class UserEskulController extends Controller
{
    public function index()
    {
        $eskul = Eskul::all();

        return view('UserSideBar.UserEskul.index', compact('eskul'));

    }
}
