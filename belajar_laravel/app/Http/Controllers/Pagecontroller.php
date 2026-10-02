<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $nama = "ILham";
        $mapel = "Bloking";
        return view('about', compact('nama', 'mapel'));
    }
}
