<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $produtos = Produto::all();
        $itens = \Cart::getContent();
//        dd($itens);
        return view('carrinho', ['produtos' => $produtos,'itens' => $itens]);
    }

    public function addCarrinho(Request $request)
    {
        \Cart::add([
           'id' =>  $request->id,
            'name' => $request->nomeP,
            'price' => $request->preco,
            'quantity' => $request->quantidade,
            'attributes' => array(
                'image' => $request->img
    )
        ]);

//        $itens = \Cart::getContent();
//        dd($itens);
        return redirect(route('carrinho'));
    }

    public function removerCarrinho(Request $request)
    {
        \Cart::remove($request->id);

        return redirect(route('carrinho'));
    }

    public function additemCarrinho(Request $request)
    {

        \Cart::update($request->id, array(
            'quantity' => 1,
        ));
        return redirect(route('carrinho'));
    }

    public function removeritemCarrinho(Request $request)
    {

        \Cart::update($request->id, array(
            'quantity' => -1,
        ));
        return redirect(route('carrinho'));
    }

    public function final()
    {

        return view('finalizar');
    }
}
