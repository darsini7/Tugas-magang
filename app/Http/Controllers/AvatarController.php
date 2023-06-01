<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function avatar (Request $request)

    {
        return view('avatar');
    }
}

