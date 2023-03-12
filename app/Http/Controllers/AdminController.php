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

    public function showProdutos()
    {
        return view('admin.produtos');
    }

    public function showEstoque()
    {
        $produtos = Produto::all();
        return view('admin.estoque', ['produtos' => $produtos]);
    }

    public function showRelatorio()
    {
        return view('admin.relatorio');
    }

    public function store(Request $request)
    {
        $produto = new Produto();

        $produto->nomeP = $request->nomeP;
        $produto->preco = $request->preco;
        $produto->tipoP = $request->tipoP;
        $produto->tamanho = $request->tamanho;
        $produto->categoria = $request->categoria;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageNome = md5($requestImage->getClientOriginalName() . strtotime('now') . "." . $extension);
            $request->image->move(public_path('img/imgProdutos'), $imageNome);
            $produto->caminho = $imageNome;
        }

        $produto->save();

        return redirect(route('admin.produtos'))->with('sucesso', 'Cadastro feito com Sucesso!');
    }

    public function destroy($id)
    {
        Produto::where('id', $id)->delete();

        return redirect(route('admin.estoque'))->with('sucesso', 'Item excluido com sucesso!');
    }

    public function edit(Request $request, $id)
    {
//        dd($request->all());
        $produto = new Produto();
        if ($request->image){
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageNome = md5($requestImage->getClientOriginalName() . strtotime('now') . "." . $extension);
                $request->image->move(public_path('img/imgProdutos'), $imageNome);
            }
            Produto::where('id', $id)->update(
                [
                    'nomeP' => $request->nomeP,
                    'caminho' => $imageNome,
                    'preco' => $request->preco,
                    'tipoP' => $request->tipoP,
                    'tamanho' => $request->tamanho,
                    'categoria' => $request->categoria

                ]);
        }else{
            Produto::where('id', $id)->update($request->except('_token','_method'));
        }

        return redirect(route('admin.estoque'))->with('sucesso', 'Item editado com sucesso!');
    }
}
