<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Struktural;
use Illuminate\Http\Request;


class UserStrukturalController extends Controller
{
    public function index()
    {
        $struktural = Struktural::all();

        return view('UserSideBar.UserStruktural.index', compact('struktural'));

    }
}
