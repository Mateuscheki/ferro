<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produto = produto::get();

        
    return view('produtos.index', [
        'produtos' => $produto
    ]);
    }
}
