<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $perpustakaans = Perpustakaan::with('bukus')->get();
        return view('perpustakaan.index', compact('perpustakaans'));
    }
}


