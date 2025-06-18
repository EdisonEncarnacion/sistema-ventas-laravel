<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        return view('nosotros'); // Esto debe coincidir con el nombre del archivo blade (sin .blade.php)
    }
}
