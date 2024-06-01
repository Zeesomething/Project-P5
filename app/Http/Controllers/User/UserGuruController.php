<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Guru;
use Illuminate\Http\Request;


class UserGuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('UserSideBar.UserGuru.index', compact('guru'));

    }
}
