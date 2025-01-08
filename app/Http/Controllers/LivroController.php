<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function create()
    {
        return view('cadastroLivro');
    }

    public function store(Request $request)
    {
    $request->validate([
        'titulo' => 'required|string|max:255',
        'autor' => 'required|string|max:255',
        'descricao' => 'required|string',
        'preco' => 'required|numeric',  
        'estoque' => 'required|integer', 
    ]);

    Livro::create([
        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'descricao' => $request->descricao,
        'preco' => $request->preco,     
        'estoque' => $request->estoque,
    ]);

    return redirect()->route('cadastroLivro')->with('success', 'Livro cadastrado com sucesso!');
    }

    public function editar(Livro $livro)
    {
        return view('editar', compact('livro'));
    }

    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descricao' => 'required|string',
        ]);

        $livro->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('livros.lista')->with('success', 'Livro atualizado com sucesso!');
    }

    public function deletar(Livro $livro)
    {
        return view('deletar', compact('livro'));
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livros.lista')->with('success', 'Livro excluído com sucesso!');
    }

}