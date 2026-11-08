<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'descricao' => 'nullable|string',
        ]);

        Produtos::create($request->all());

        return redirect()->route('produtos.index')
                         ->with('success', 'Produto criado com sucesso.');
    }
}
