<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AvatarController extends Controller
{
    public function avatar (Request $request)

    {
        return view('avatar');
    }
}
