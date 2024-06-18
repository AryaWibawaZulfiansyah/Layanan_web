<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index()
    {
        return view('home.menu.panduan.index');
    }
}
