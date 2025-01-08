<?php

namespace App\Http\Controllers;

use App\Models\Livro; 

class ListaController extends Controller
{
    public function index()
    {
        $livros = Livro::all();

        return view('lista', compact('livros'));
    }
}
