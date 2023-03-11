<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function showProdutos(){
        return view('admin.produtos');
    }

    public function store(Request $request)
    {
        $produto = new Produto();

        $produto->nomeP = $request->nomeP;
        $produto->preco = $request->preco;
        $produto->tipoP = $request->tipoP;
        $produto->tamanho = $request->tamanho;
        $produto->categoria = $request->categoria;
        if ($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageNome = md5($requestImage->getClientOriginalName() . strtotime('now') . "." . $extension);
            $request->image->move(public_path('img/imgProdutos'),$imageNome);
            $produto->caminho = $imageNome;
        }

        $produto->save();

        return redirect(route('admin.produtos'))->with('sucesso','Cadastro feito com Sucesso!');
    }
}
