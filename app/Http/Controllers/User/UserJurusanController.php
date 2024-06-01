<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Jurusan;
use Illuminate\Http\Request;


class UserJurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();

        return view('UserSideBar.UserJurusan.index', compact('jurusan'));

    }
}
