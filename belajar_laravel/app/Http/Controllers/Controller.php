<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function siswa() {
        $siswa = ['Andi', 'Budi', 'CItra', 'Dewi', 'Eko'];
        return view('siswa', compact('siswa'));
    }
}
