<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    public function index()
    {
        return view('home.menu.biaya.index');
    }
}
